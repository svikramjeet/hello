<?php

namespace Svikramjeet\Hello\Providers;

use Illuminate\Support\ServiceProvider;

class HelloServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        echo "I am booting";
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
