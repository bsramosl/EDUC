<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PayPalController extends Controller
{
    private $client;
    private $clientId;
    private $secret;


    public function __construct()
    { 
        $this->client = new Client([
            'base_uri' => 'https://api-m.sandbox.paypal.com'
        ]);
        $this->clientId = env('PAYPAL_CLIENT_ID');
        $this->secret = env('PAYPAL_SECRET');
    }

    private function getAccessToken(){
        $response = $this->client->request('POST', '/v1/oauth2/token', [
                'headers' => [
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/x-www-form-urlencoded',
                ],
                'body' => 'grant_type=client_credentials',
                'auth' => [
                    $this->clientId, $this->secret, 'basic'
                ]
            ]
        );
        $data = json_decode($response->getBody(), true);

        return $data['access_token'];
    }
     
    public function proceso($orderId){
        $accessToken = $this->getAccessToken();
        $response = $this->client->request('GET', '/v2/checkout/orders/' . $orderId,[
            'headers' => [
                'Accept' => 'application/json',
                'Authorization' => "Bearer $accessToken"
            ]
        ]);
        return (string) ($response->getBody());
    }
}
