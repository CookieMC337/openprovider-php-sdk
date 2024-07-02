<?php

namespace Vexura\Accounting;

use GuzzleHttp\Exception\GuzzleException;
use Vexura\OpenProvider;

class Account
{
    private $API;

    public function __construct(OpenProvider $API)
    {
        $this->API = $API;
    }

    /**
     * @return array|string
     * @throws GuzzleException
     */
    public function getBalance()
    {
        return $this->API->get('accounting/balance');
    }

}