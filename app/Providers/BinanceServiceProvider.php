<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Binance\API;

class BinanceServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(API::class, function () {
            $apiKey = env('BINANCE_API_KEY');
            $apiSecret = env('BINANCE_API_SECRET');

            return new API($apiKey, $apiSecret);
        });
    }

    public function boot()
    {
        //
    }
}
