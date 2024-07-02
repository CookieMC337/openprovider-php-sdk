<?php

namespace Vexura\Accounting;

use GuzzleHttp\Exception\GuzzleException;
use Vexura\OpenProvider;

class EmailTemplate
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
    public function listEmails(array $params = [])
    {
        return $this->API->get('emails', $params);
    }

    /**
     * @param array $data
     * @return array|string
     * @throws GuzzleException
     */
    public function createEmail(array $data)
    {
        return $this->API->post('emails', $data);
    }

    /**
     * @param int $id
     * @param array $data
     * @return array|string
     * @throws GuzzleException
     */
    public function updateEmail(int $id, array $data)
    {
        return $this->API->put("emails/{$id}", $data);
    }

    /**
     * @param int $id
     * @return array|string
     * @throws GuzzleException
     */
    public function deleteEmail(int $id)
    {
        return $this->API->delete("emails/{$id}");
    }
}
