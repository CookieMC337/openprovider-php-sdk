<?php

namespace Vexura\SSL;

use GuzzleHttp\Exception\GuzzleException;
use Vexura\OpenProvider;

class SSL
{
    private $API;
    public function __construct(OpenProvider $API)
    {
        $this->API = $API;
    }

    /**
     * @param array $queryParams
     * @return array|string
     * @throws GuzzleException
     */
    public function listApproverEmails(array $queryParams)
    {
        return $this->API->get('ssl/approver-emails', $queryParams);
    }

    /**
     * @param array $body
     * @return array|string
     * @throws GuzzleException
     */
    public function createCsr(array $body)
    {
        return $this->API->post('ssl/csr', $body);
    }

    /**
     * @param array $body
     * @return array|string
     * @throws GuzzleException
     */
    public function decodeCsr(array $body)
    {
        return $this->API->post('ssl/csr/decode', $body);
    }

    /**
     * @param array $queryParams
     * @return array|string
     * @throws GuzzleException
     */
    public function listOrders(array $queryParams)
    {
        return $this->API->get('ssl/orders', $queryParams);
    }

    /**
     * @param array $body
     * @return array|string
     * @throws GuzzleException
     */
    public function createOrder(array $body)
    {
        return $this->API->post('ssl/orders', $body);
    }

    /**
     * @param int $id
     * @return array|string
     * @throws GuzzleException
     */
    public function getOrder(int $id)
    {
        return $this->API->get("ssl/orders/{$id}");
    }

    /**
     * @param int $id
     * @param array $body
     * @return array|string
     * @throws GuzzleException
     */
    public function updateOrder(int $id, array $body)
    {
        return $this->API->put("ssl/orders/{$id}", $body);
    }

    /**
     * @param int $id
     * @param array $body
     * @return array|string
     * @throws GuzzleException
     */
    public function updateApproverEmailAddress(int $id, array $body)
    {
        return $this->API->put("ssl/orders/{$id}/approver-email", $body);
    }

    /**
     * @param int $id
     * @param array $body
     * @return array|string
     * @throws GuzzleException
     */
    public function resendApproverEmail(int $id, array $body)
    {
        return $this->API->post("ssl/orders/{$id}/approver-email/resend", $body);
    }

    /**
     * @param int $id
     * @param array $body
     * @return array|string
     * @throws GuzzleException
     */
    public function cancelOrder(int $id, array $body)
    {
        return $this->API->post("ssl/orders/{$id}/cancel", $body);
    }

    /**
     * @param int $id
     * @param array $body
     * @return array|string
     * @throws GuzzleException
     */
    public function createOtpToken(int $id, array $body)
    {
        return $this->API->post("ssl/orders/{$id}/otp-tokens", $body);
    }

    /**
     * @param int $id
     * @param array $body
     * @return array|string
     * @throws GuzzleException
     */
    public function reissueOrder(int $id, array $body)
    {
        return $this->API->post("ssl/orders/{$id}/reissue", $body);
    }

    /**
     * @param int $id
     * @param array $body
     * @return array|string
     * @throws GuzzleException
     */
    public function renewOrder(int $id, array $body)
    {
        return $this->API->post("ssl/orders/{$id}/renew", $body);
    }

    /**
     * @param array $queryParams
     * @return array|string
     * @throws GuzzleException
     */
    public function listProducts(array $queryParams)
    {
        return $this->API->get('ssl/products', $queryParams);
    }

    /**
     * @param int $id
     * @return array|string
     * @throws GuzzleException
     */
    public function getProduct(int $id)
    {
        return $this->API->get("ssl/products/{$id}");
    }
}
