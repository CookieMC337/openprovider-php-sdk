<?php

namespace Vexura\Accounting;

use GuzzleHttp\Exception\GuzzleException;
use Vexura\OpenProvider;

class ResellerCustomer
{
    private $API;

    public function __construct(OpenProvider $API)
    {
        $this->API = $API;
    }

    /**
     * @param array $params
     * @return array|string
     * @throws GuzzleException
     */
    public function listContacts(array $params = [])
    {
        return $this->API->get('contacts', $params);
    }

    /**
     * @param array $data
     * @return array|string
     * @throws GuzzleException
     */
    public function createContact(array $data)
    {
        return $this->API->post('contacts', $data);
    }

    /**
     * @param int $id
     * @param array $params
     * @return array|string
     * @throws GuzzleException
     */
    public function getContact(int $id, array $params = [])
    {
        return $this->API->get("contacts/{$id}", $params);
    }

    /**
     * @param int $id
     * @param array $data
     * @return array|string
     * @throws GuzzleException
     */
    public function updateContact(int $id, array $data)
    {
        return $this->API->put("contacts/{$id}", $data);
    }

    /**
     * @param int $id
     * @return array|string
     * @throws GuzzleException
     */
    public function deleteContact(int $id)
    {
        return $this->API->delete("contacts/{$id}");
    }

    /**
     * @param array $params
     * @return array|string
     * @throws GuzzleException
     */
    public function listCustomers(array $params = [])
    {
        return $this->API->get('customers', $params);
    }

    /**
     * @param array $data
     * @return array|string
     * @throws GuzzleException
     */
    public function createCustomer(array $data)
    {
        return $this->API->post('customers', $data);
    }

    /**
     * @param string $handle
     * @param array $params
     * @return array|string
     * @throws GuzzleException
     */
    public function getCustomer(string $handle, array $params = [])
    {
        return $this->API->get("customers/{$handle}", $params);
    }

    /**
     * @param string $handle
     * @param array $data
     * @return array|string
     * @throws GuzzleException
     */
    public function updateCustomer(string $handle, array $data)
    {
        return $this->API->put("customers/{$handle}", $data);
    }

    /**
     * @param string $handle
     * @return array|string
     * @throws GuzzleException
     */
    public function deleteCustomer(string $handle)
    {
        return $this->API->delete("customers/{$handle}");
    }

    /**
     * @param array $params
     * @return array|string
     * @throws GuzzleException
     */
    public function listDomainEmailVerifications(array $params = [])
    {
        return $this->API->get('customers/verifications/emails/domains', $params);
    }

    /**
     * @param array $data
     * @return array|string
     * @throws GuzzleException
     */
    public function restartEmailVerification(array $data)
    {
        return $this->API->post('customers/verifications/emails/restart', $data);
    }

    /**
     * @param array $data
     * @return array|string
     * @throws GuzzleException
     */
    public function startEmailVerification(array $data)
    {
        return $this->API->post('customers/verifications/emails/start', $data);
    }

    /**
     * @param array $params
     * @return array|string
     * @throws GuzzleException
     */
    public function getReseller(array $params = [])
    {
        return $this->API->get('resellers', $params);
    }

    /**
     * @param int $id
     * @param array $data
     * @return array|string
     * @throws GuzzleException
     */
    public function updateReseller(int $id, array $data)
    {
        return $this->API->put("resellers/{$id}", $data);
    }

    /**
     * @return array|string
     * @throws GuzzleException
     */
    public function getSettings()
    {
        return $this->API->get('resellers/settings');
    }

    /**
     * @return array|string
     * @throws GuzzleException
     */
    public function getStatistics()
    {
        return $this->API->get('resellers/statistics');
    }

    /**
     * @param array $params
     * @return array|string
     * @throws GuzzleException
     */
    public function listTags(array $params = [])
    {
        return $this->API->get('tags', $params);
    }

    /**
     * @param array $data
     * @return array|string
     * @throws GuzzleException
     */
    public function createTag(array $data)
    {
        return $this->API->post('tags', $data);
    }

    /**
     * @param array $params
     * @return array|string
     * @throws GuzzleException
     */
    public function deleteTag(array $params = [])
    {
        return $this->API->delete('tags', $params);
    }
}
