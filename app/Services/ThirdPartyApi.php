<?php
namespace App\Services;
use GuzzleHttp\Client;

class ThirdPartyApi
{
    public $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function authentication()
    {
        $url = '';
        $data = [];
        try {
                $response = $this->client->post($url);
                $statuscode = $response->getStatusCode();
                if ($statuscode == 200)
                {
                    $responseData = json_decode($response->getBody()->getContents());
                }
            } catch (\GuzzleHttp\Exception\ClientException $e)
            {
                $response = $e->getResponse();
                $responseBodyAsString = $response->getBody()->getContents();
            }
        // catch (\GuzzleHttp\Exception\ConnectException $e) {
        //     $response = $e->getResponse();
        // }
        
    }
}