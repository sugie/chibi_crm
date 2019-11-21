<?php

namespace App\Providers;

use App\MyServices\MyApplicationService;
use Illuminate\Support\ServiceProvider;

class MyApplicationProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        app()->singleton('myapplicationservice', MyApplicationService::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
