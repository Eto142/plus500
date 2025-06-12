<?php

namespace App\Http\Controllers;

use Binance\API;
use Illuminate\Http\Request;

class BinanceController extends Controller
{
    protected $binance;

    public function __construct(API $binance)
    {
        $this->binance = $binance;
    }

    // Fetch latest price ticker for a trading pair (e.g., BTC/USDT)
    public function getPriceTicker($symbol = 'BTCUSDT')
    {
        $price = $this->binance->price($symbol);

        // Return the price to the view
        return view('binance.ticker', ['price' => $price, 'symbol' => $symbol]);
    }

    // Fetch candlestick data for a trading pair (e.g., BTC/USDT)
    public function getCandlestickData($symbol = 'BTCUSDT', $interval = "1m")
    {
        $candlesticks = $this->binance->candlesticks($symbol, $interval);

        // Return the candlestick data to the view
        return view('binance.candlesticks', ['candlesticks' => $candlesticks, 'symbol' => $symbol, 'interval' => $interval]);
    }


    // Fetch live price tickers for a set of trading pairs
    public function showLiveTradingView()
    {
        $symbols = ['BTCUSDT', 'ETHBTC', 'BNBBTC'];
        $tickers = [];

        foreach ($symbols as $symbol) {
            $ticker = $this->binance->priceTicker($symbol);
            $tickers[$symbol] = [
                'price' => $ticker['price'],
                'percentChange' => $ticker['priceChangePercent']
            ];
        }

        return view('binance', ['tickers' => $tickers]);
    }
}
