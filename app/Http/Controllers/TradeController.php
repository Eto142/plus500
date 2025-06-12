<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class TradeController extends Controller
{
    public function index()
    {
        $client = new Client();
        $response = $client->get('https://api.binance.com/api/v3/ticker/24hr');
        $tickers = json_decode($response->getBody(), true);

        return view('dashboard', compact('tickers'));
    }
}
