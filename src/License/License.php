<?php

namespace Vexura\License;

use GuzzleHttp\Exception\GuzzleException;
use Vexura\OpenProvider;

class License
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
    public function listLicenses(array $params = [])
    {
        return $this->API->get('licenses', $params);
    }

    /**
     * @param string $product
     * @param int $keyId
     * @param array $data
     * @return array|string
     * @throws GuzzleException
     */
    public function resetHwid(string $product, int $keyId, array $data)
    {
        return $this->API->post("licenses/hwids/reset/{$product}/{$keyId}", $data);
    }

    /**
     * @param array $params
     * @return array|string
     * @throws GuzzleException
     */
    public function listItems(array $params = [])
    {
        return $this->API->get('licenses/items', $params);
    }

    /**
     * @param array $params
     * @return array|string
     * @throws GuzzleException
     */
    public function listPleskLicenses(array $params = [])
    {
        return $this->API->get('licenses/plesk', $params);
    }

    /**
     * @param array $data
     * @return array|string
     * @throws GuzzleException
     */
    public function createPleskLicense(array $data)
    {
        return $this->API->post('licenses/plesk', $data);
    }

    /**
     * @param int $keyId
     * @return array|string
     * @throws GuzzleException
     */
    public function getPleskKey(int $keyId)
    {
        return $this->API->get("licenses/plesk/key/{$keyId}");
    }

    /**
     * @param int $keyId
     * @return array|string
     * @throws GuzzleException
     */
    public function getPleskLicense(int $keyId)
    {
        return $this->API->get("licenses/plesk/{$keyId}");
    }

    /**
     * @param int $keyId
     * @param array $data
     * @return array|string
     * @throws GuzzleException
     */
    public function updatePleskLicense(int $keyId, array $data)
    {
        return $this->API->put("licenses/plesk/{$keyId}", $data);
    }

    /**
     * @param int $keyId
     * @return array|string
     * @throws GuzzleException
     */
    public function deletePleskLicense(int $keyId)
    {
        return $this->API->delete("licenses/plesk/{$keyId}");
    }

    /**
     * @param array $params
     * @return array|string
     * @throws GuzzleException
     */
    public function listVirtuozzoLicenses(array $params = [])
    {
        return $this->API->get('licenses/virtuozzo', $params);
    }

    /**
     * @param array $data
     * @return array|string
     * @throws GuzzleException
     */
    public function createVirtuozzoLicense(array $data)
    {
        return $this->API->post('licenses/virtuozzo', $data);
    }

    /**
     * @param int $keyId
     * @return array|string
     * @throws GuzzleException
     */
    public function getVirtuozzoLicense(int $keyId)
    {
        return $this->API->get("licenses/virtuozzo/{$keyId}");
    }

    /**
     * @param int $keyId
     * @param array $data
     * @return array|string
     * @throws GuzzleException
     */
    public function updateVirtuozzoLicense(int $keyId, array $data)
    {
        return $this->API->put("licenses/virtuozzo/{$keyId}", $data);
    }

    /**
     * @param int $keyId
     * @return array|string
     * @throws GuzzleException
     */
    public function deleteVirtuozzoLicense(int $keyId)
    {
        return $this->API->delete("licenses/virtuozzo/{$keyId}");
    }

    /**
     * @param int $keyId
     * @return array|string
     * @throws GuzzleException
     */
    public function getVirtuozzoKey(int $keyId)
    {
        return $this->API->get("licenses/virtuozzo/{$keyId}/key");
    }
}
