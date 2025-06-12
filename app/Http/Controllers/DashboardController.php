<?php

namespace App\Http\Controllers;

use App\Services\BinanceService;

class DashboardController extends Controller
{
    protected $binanceService;

    public function __construct(BinanceService $binanceService)
    {
        $this->binanceService = $binanceService;
    }

    public function showDashboard()
    {
        // // $boardData = $this->binanceService->getBoardData();
        // // $orderBook = $this->binanceService->getOrderBook();
        // $marketData = $this->binanceService->getMarketData();
        // // $portfolio = $this->binanceService->getPortfolio();
        // // $news = $this->binanceService->getNews();
        // // Fetch order book data for BTCUSDT
        // $orderBookData = $this->binanceService->getOrderBook();
        // $candlestickData = $this->binanceService->getCandlestickData();


        // return view('home', compact('orderBookData', 'marketData', 'candlestickData'));

        // Fetch market data
        $marketData = $this->binanceService->getMarketData();

        // Fetch order book data for BTCUSDT
        $orderBookData = $this->binanceService->getOrderBook('BTCUSDT'); // Specify symbol if necessary

        // Fetch candlestick data for BTCUSDT with a specific interval
        $candlestickData = $this->binanceService->getCandlestickData('BTCUSDT', '1h'); // Specify parameters if necessary

        // Optional: Check for null responses and handle errors accordingly
        if (is_null($orderBookData) || is_null($marketData) || is_null($candlestickData)) {
            // Handle the error (e.g., log it, show an error message, etc.)
        }

        return view('home', compact('orderBookData', 'marketData', 'candlestickData'));
    }


    public function showTest()
    {
        return view('test');
    }

    public function showProfile()
    {
        return view('user.profile');
    }

    public function showWithdraw()
    {
        return view('user.withdraw');
    }

    public function showNews()
    {
        return view('user.news');
    }

    public function showMarket()
    {
        return view('user.market');
    }

    public function showTrading()
    {
        return view('user.trading');
    }

    
    public function showCalculator()
    {
        return view('user.calculator');
    }

    public function deposit()
    {
        return view('deposit');
    }
}
