<?php

namespace App\Services;

use Binance\API;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class BinanceService
{
    protected $api;
    protected $baseUrl;

    public function __construct()
    {
        // Initialize Binance API with your keys from the environment file
        $this->api = new API(env('BINANCE_API_KEY'), env('BINANCE_SECRET_KEY'));
        $this->baseUrl = config('services.binance.base_url', 'https://api.binance.com');
    }

    /**
     * Fetch recent trades for a given symbol (default is BTC/USDT) and limit (default is 50 trades)
     *
     * @param string $symbol
     * @param int $limit
     * @return array
     */
    // Method to fetch order book data
    public function getOrderBook($symbol = 'BTCUSDT', $limit = 10)
    {
        $response = Http::get("{$this->baseUrl}/api/v3/depth", [
            'symbol' => $symbol,
            'limit' => $limit
        ]);

        if ($response->successful()) {
            return $response->json();
        }

        return null;  // Handle errors accordingly
    }



    public function getCandlestickData($symbol = 'BTCUSDT', $interval = '1h', $limit = 50)
    {
        // Optionally validate symbol here if needed

        $response = Http::get("{$this->baseUrl}/api/v3/klines", [
            'symbol' => $symbol,
            'interval' => $interval,
            'limit' => $limit
        ]);

        if ($response->successful()) {
            return $response->json(); // Return the JSON data from the response
        }

        // Optional: Log the error response or handle it accordingly
        Log::error('Failed to fetch candlestick data', [
            'status' => $response->status(),
            'response' => $response->body(),
            'symbol' => $symbol,
            'interval' => $interval,
        ]);

        return null; // Return null or an appropriate error response
    }




    /**
     * Fetch market ticker prices for all symbols
     *
     * @return array
     */

    public function getMarketData($symbol = 'BTCUSDT')
    {
        // Fetch the current price of BTC/USDT from Binance API
        $response = Http::get("https://api.binance.com/api/v3/ticker/price", [
            'symbol' => $symbol
        ]);

        if ($response->successful()) {
            return $response->json();
        }

        return null;  // Handle errors accordingly
    }


    /**
     * Fetch user's portfolio (account balances for specific assets)
     *
     * @return array
     */
    public function getPortfolio()
    {
        try {
            return $this->api->account();
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }

    /**
     * Placeholder for fetching news (Binance doesn't provide a news API directly)
     *
     * @return array
     */
    public function getNews()
    {
        return []; // Integrate with a news API if needed
    }

    /**
     * Simple conversion calculator for trading pairs
     *
     * @param string $from
     * @param string $to
     * @param float $amount
     * @return float|array
     */
    public function calculateConversion($from, $to, $amount)
    {
        try {
            $price = $this->api->price($from . $to);
            return $price * $amount;
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }
}
