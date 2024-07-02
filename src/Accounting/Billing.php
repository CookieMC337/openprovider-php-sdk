<?php

namespace Vexura\Accounting;

use GuzzleHttp\Exception\GuzzleException;
use Vexura\OpenProvider;

class Billing
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
    public function listInvoices(array $params = [])
    {
        return $this->API->get('invoices', $params);
    }

    /**
     * @param array $params
     * @return array|string
     * @throws GuzzleException
     */
    public function listPayments(array $params = [])
    {
        return $this->API->get('payments', $params);
    }

    /**
     * @param array $params
     * @return array|string
     * @throws GuzzleException
     */
    public function listTransactions(array $params = [])
    {
        return $this->API->get('transactions', $params);
    }
}
