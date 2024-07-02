<?php

namespace Vexura\Domain;

use GuzzleHttp\Exception\GuzzleException;
use Vexura\OpenProvider;

class DNS
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
    public function createDomainToken(array $data)
    {
        return $this->API->post('dns/domain-token', $data);
    }

    /**
     * @param array $params
     * @return array|string
     * @throws GuzzleException
     */
    public function listNameservers(array $params = [])
    {
        return $this->API->get('dns/nameservers', $params);
    }

    /**
     * @param array $data
     * @return array|string
     * @throws GuzzleException
     */
    public function createNameserver(array $data)
    {
        return $this->API->post('dns/nameservers', $data);
    }

    /**
     * @param string $name
     * @return array|string
     * @throws GuzzleException
     */
    public function getNameserver(string $name)
    {
        return $this->API->get("dns/nameservers/{$name}");
    }

    /**
     * @param string $name
     * @param array $data
     * @return array|string
     * @throws GuzzleException
     */
    public function updateNameserver(string $name, array $data)
    {
        return $this->API->put("dns/nameservers/{$name}", $data);
    }

    /**
     * @param string $name
     * @return array|string
     * @throws GuzzleException
     */
    public function deleteNameserver(string $name)
    {
        return $this->API->delete("dns/nameservers/{$name}");
    }

    /**
     * @param array $params
     * @return array|string
     * @throws GuzzleException
     */
    public function listNameserverGroups(array $params = [])
    {
        return $this->API->get('dns/nameservers/groups', $params);
    }

    /**
     * @param array $data
     * @return array|string
     * @throws GuzzleException
     */
    public function createNameserverGroup(array $data)
    {
        return $this->API->post('dns/nameservers/groups', $data);
    }

    /**
     * @param string $nsGroup
     * @param array $params
     * @return array|string
     * @throws GuzzleException
     */
    public function getNameserverGroup(string $nsGroup, array $params = [])
    {
        return $this->API->get("dns/nameservers/groups/{$nsGroup}", $params);
    }

    /**
     * @param string $nsGroup
     * @param array $data
     * @return array|string
     * @throws GuzzleException
     */
    public function updateNameserverGroup(string $nsGroup, array $data)
    {
        return $this->API->put("dns/nameservers/groups/{$nsGroup}", $data);
    }

    /**
     * @param string $nsGroup
     * @return array|string
     * @throws GuzzleException
     */
    public function deleteNameserverGroup(string $nsGroup)
    {
        return $this->API->delete("dns/nameservers/groups/{$nsGroup}");
    }

    /**
     * @param array $params
     * @return array|string
     * @throws GuzzleException
     */
    public function listTemplates(array $params = [])
    {
        return $this->API->get('dns/templates', $params);
    }

    /**
     * @param array $data
     * @return array|string
     * @throws GuzzleException
     */
    public function createTemplate(array $data)
    {
        return $this->API->post('dns/templates', $data);
    }

    /**
     * @param int $id
     * @return array|string
     * @throws GuzzleException
     */
    public function getTemplate(int $id)
    {
        return $this->API->get("dns/templates/{$id}");
    }

    /**
     * @param int $id
     * @return array|string
     * @throws GuzzleException
     */
    public function deleteTemplate(int $id)
    {
        return $this->API->delete("dns/templates/{$id}");
    }

    /**
     * @param array $params
     * @return array|string
     * @throws GuzzleException
     */
    public function listZones(array $params = [])
    {
        return $this->API->get('dns/zones', $params);
    }

    /**
     * @param array $data
     * @return array|string
     * @throws GuzzleException
     */
    public function createZone(array $data)
    {
        return $this->API->post('dns/zones', $data);
    }

    /**
     * @param string $name
     * @param array $params
     * @return array|string
     * @throws GuzzleException
     */
    public function getZone(string $name, array $params = [])
    {
        return $this->API->get("dns/zones/{$name}", $params);
    }

    /**
     * @param string $name
     * @param array $data
     * @return array|string
     * @throws GuzzleException
     */
    public function updateZone(string $name, array $data)
    {
        return $this->API->put("dns/zones/{$name}", $data);
    }

    /**
     * @param string $name
     * @param array $params
     * @return array|string
     * @throws GuzzleException
     */
    public function deleteZone(string $name, array $params = [])
    {
        return $this->API->delete("dns/zones/{$name}", $params);
    }

    /**
     * @param string $name
     * @param array $params
     * @return array|string
     * @throws GuzzleException
     */
    public function listZoneRecords(string $name, array $params = [])
    {
        return $this->API->get("dns/zones/{$name}/records", $params);
    }
}
