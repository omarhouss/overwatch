<?php

namespace App\Services;
namespace App\Http\Controllers;


use Selix\Client;

class SellixPay
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client(config('selix.secret_key'));
    }

    public function getClient()
    {
        return $this->client;
    }
}
