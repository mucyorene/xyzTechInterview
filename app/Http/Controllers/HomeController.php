<?php

namespace App\Http\Controllers;

use Error;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function donateToday($amount)
    {
        // Create a PSR-7 request object to send
        $headers = ['Content-type' => 'application/json', 'Authorization' => 'Bearer FLWSECK_TEST-97c2dd3197ab38dd6133eababc41cce6-X'];

        $client = new \GuzzleHttp\Client();
        try {
            $response = $client->post('https://api.flutterwave.com/v3/payments', [
                'headers' => $headers,
                'body' => json_encode([
                    "tx_ref" => "435678765435".uniqid(),
                    "amount" => $amount,
                    "currency" => "RWF",
                    "payment_options" => "card",
                    "redirect_url" => "http://localhost:8000/",
                    "customer" => [
                        "email" => "renemucyomucici@gmail.com",
                        "name" => "Mucyo Rene"
                    ]
                ])
            ]);
            return redirect(json_decode($response->getBody(), true)['data']['link']);
        } catch (GuzzleException $e) {
            return ["error" => $e->getMessage()];
        }


    }
}
