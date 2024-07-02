<?php

namespace Vexura\Domain;

use GuzzleHttp\Exception\GuzzleException;
use Vexura\License\License;
use Vexura\OpenProvider;

class Domain
{
    private $API;
    /**
     * @var DNS
     */
    private $dnsHandler;
    /**
     * @var EasyDMARC
     */
    private $easyDMARCHandler;

    private $spamExpertHandler;

    public function __construct(OpenProvider $API)
    {
        $this->API = $API;
    }

    /**
     * @return DNS
     */
    public function dns(): DNS
    {
        if (!$this->dnsHandler) {
            $this->dnsHandler = new DNS($this->API);
        }
        return $this->dnsHandler;
    }

    /**
     * @return EasyDMARC
     */
    public function easyDMARC(): EasyDMARC
    {
        if (!$this->easyDMARCHandler) {
            $this->easyDMARCHandler = new EasyDMARC($this->API);
        }
        return $this->easyDMARCHandler;
    }
    
    /**
     * @return SpamExpert
     */
    public function spamExpert(): SpamExpert
    {
        if (!$this->spamExpertHandler) {
            $this->spamExpertHandler = new SpamExpert($this->API);
        }
        return $this->spamExpertHandler;
    }

    /**
     * @return array|string
     * @throws GuzzleException
     */
    public function getPricelist()
    {
        return $this->API->get('domains/prices');
    }

    /**
     * @param string $domainName    domain.de
     * @return array|string
     * @throws GuzzleException
     */
    public function check(string $domainName)
    {
        return $this->API->post('domains/check', [
            'domain' => $domainName
        ]);
    }

    /**
     * @param int $id
     * @return array|string
     * @throws GuzzleException
     */
    public function getDomain(int $id)
    {
        return $this->API->get("domains/{$id}");
    }

    /**
     * @param array $params
     * @return array|string
     * @throws GuzzleException
     */
    public function listDomains(array $params = [])
    {
        return $this->API->get('domains', $params);
    }

    /**
     * @param array $data
     * @return array|string
     * @throws GuzzleException
     */
    public function createDomain(array $data)
    {
        return $this->API->post('domains', $data);
    }

    /**
     * @param int $id
     * @param array $data
     * @return array|string
     * @throws GuzzleException
     */
    public function updateDomain(int $id, array $data)
    {
        return $this->API->put("domains/{$id}", $data);
    }

    /**
     * @param int $id
     * @param array $params
     * @return array|string
     * @throws GuzzleException
     */
    public function deleteDomain(int $id, array $params = [])
    {
        return $this->API->delete("domains/{$id}", $params);
    }

    /**
     * @param int $id
     * @param array $data
     * @return array|string
     * @throws GuzzleException
     */
    public function renewDomain(int $id, array $data)
    {
        return $this->API->post("domains/{$id}/renew", $data);
    }

    /**
     * @param int $id
     * @param array $data
     * @return array|string
     * @throws GuzzleException
     */
    public function restoreDomain(int $id, array $data)
    {
        return $this->API->post("domains/{$id}/restore", $data);
    }

    /**
     * @param int $id
     * @param array $data
     * @return array|string
     * @throws GuzzleException
     */
    public function approveTransfer(int $id, array $data)
    {
        return $this->API->post("domains/{$id}/transfer/approve", $data);
    }

    /**
     * @param int $id
     * @param array $data
     * @return array|string
     * @throws GuzzleException
     */
    public function sendFoa1(int $id, array $data)
    {
        return $this->API->post("domains/{$id}/transfer/send-foa1", $data);
    }

    /**
     * @param int $id
     * @return array|string
     * @throws GuzzleException
     */
    public function getAuthCode(int $id)
    {
        return $this->API->get("domains/{$id}/authcode");
    }

    /**
     * @param int $id
     * @param array $data
     * @return array|string
     * @throws GuzzleException
     */
    public function resetAuthCode(int $id, array $data)
    {
        return $this->API->post("domains/{$id}/authcode/reset", $data);
    }

    /**
     * @param int $id
     * @return array|string
     * @throws GuzzleException
     */
    public function tryAgainLastOperation(int $id, array $data)
    {
        return $this->API->post("domains/{$id}/last-operation/restart", $data);
    }

    /**
     * @param array $params
     * @return array|string
     * @throws GuzzleException
     */
    public function getAdditionalData(array $params = [])
    {
        return $this->API->get('domains/additional-data', $params);
    }

    /**
     * @param array $params
     * @return array|string
     * @throws GuzzleException
     */
    public function getCustomerAdditionalData(array $params = [])
    {
        return $this->API->get('domains/additional-data/customers', $params);
    }

    /**
     * @param array $params
     * @return array|string
     * @throws GuzzleException
     */
    public function listTlds(array $params = [])
    {
        return $this->API->get('tlds', $params);
    }

    /**
     * @param string $name
     * @param array $params
     * @return array|string
     * @throws GuzzleException
     */
    public function getTld(string $name, array $params = [])
    {
        return $this->API->get("tlds/{$name}", $params);
    }
}
