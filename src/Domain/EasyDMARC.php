<?php

namespace Vexura\Domain;

use GuzzleHttp\Exception\GuzzleException;
use Vexura\OpenProvider;

class EasyDMARC
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
    public function getEasyDmarc(array $params = [])
    {
        return $this->API->get('easydmarcs', $params);
    }

    /**
     * @param array $data
     * @return array|string
     * @throws GuzzleException
     */
    public function createEasyDmarc(array $data)
    {
        return $this->API->post('easydmarcs', $data);
    }

    /**
     * @param array $params
     * @return array|string
     * @throws GuzzleException
     */
    public function listEasyDmarc(array $params = [])
    {
        return $this->API->get('easydmarcs/list', $params);
    }

    /**
     * @param int $id
     * @return array|string
     * @throws GuzzleException
     */
    public function deleteEasyDmarc(int $id)
    {
        return $this->API->delete("easydmarcs/{$id}");
    }

    /**
     * @param int $id
     * @param array $data
     * @return array|string
     * @throws GuzzleException
     */
    public function retryEasyDmarc(int $id, array $data)
    {
        return $this->API->post("easydmarcs/{$id}/retry", $data);
    }

    /**
     * @param int $id
     * @param array $params
     * @return array|string
     * @throws GuzzleException
     */
    public function getEasyDmarcSso(int $id, array $params = [])
    {
        return $this->API->get("easydmarcs/{$id}/sso", $params);
    }
}
