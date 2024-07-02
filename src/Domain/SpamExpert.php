<?php

namespace Vexura\Domain;

use GuzzleHttp\Exception\GuzzleException;
use Vexura\OpenProvider;

class SpamExpert
{
    private $API;
    public function __construct(OpenProvider $API)
    {
        $this->API = $API;
    }

    /**
     * @param array $data
     * @return array|string
     * @throws GuzzleException
     */
    public function createDomain(array $data)
    {
        return $this->API->post('spam-expert/domains', $data);
    }

    /**
     * @param string $domainName
     * @param array $params
     * @return array|string
     * @throws GuzzleException
     */
    public function getDomain(string $domainName, array $params = [])
    {
        return $this->API->get("spam-expert/domains/{$domainName}", $params);
    }

    /**
     * @param string $domainName
     * @param array $data
     * @return array|string
     * @throws GuzzleException
     */
    public function updateDomain(string $domainName, array $data)
    {
        return $this->API->put("spam-expert/domains/{$domainName}", $data);
    }

    /**
     * @param string $domainName
     * @param array $params
     * @return array|string
     * @throws GuzzleException
     */
    public function deleteDomain(string $domainName, array $params = [])
    {
        return $this->API->delete("spam-expert/domains/{$domainName}", $params);
    }
}
