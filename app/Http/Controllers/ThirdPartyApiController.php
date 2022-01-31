<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThirdPartyApiController extends Controller
{
    public function Cli(){
        $client = new \GuzzleHttp\Client([
            'base_uri' => 'https://rapidapi.com/Gramzivi/api/covid-19-data/',
            'headers' => [
                'Content-Type' => 'application/json',
                'customer_name' => 'test',
                'customer_key' => 's324ghe7cf77f652ef2f030b9f26'
            ]
        ]);
        $url = 'actions/authenticate';
        $client->post($url);
    }
    public function getApi(){
    $apiClient = app(\App\Services\ThirdPartyApi::class);
    $apiClient->authentication();
    }



}
