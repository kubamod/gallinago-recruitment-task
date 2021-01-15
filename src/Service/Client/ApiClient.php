<?php

namespace kubamod\FreshsalesApiClient\Service\Client;

use Dotenv\Dotenv;
use GuzzleHttp\Client;

abstract class ApiClient
{

    public Client $client;

    protected array $headers = [];

    public function __construct()
    {
        $dotenv = Dotenv::createImmutable(__DIR__ . '/../../../');
        $dotenv->load();
        $this->createClient();
    }

    private function createClient(): void
    {
        $this->headers = [
            'Authorization' => 'Token token=' . $_ENV['API_KEY'],
            'Content-Type' => 'application/json'
        ];

        $this->client = new Client([
                'base_uri' => $_ENV['BASE_URI'],
                'headers' => $this->headers,
            ]
        );
    }

    protected function addToHeader($key, $value)
    {
        $this->headers[$key] = $value;
        return $this;
    }


}