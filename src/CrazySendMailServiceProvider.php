<?php

namespace Fatoorahpayment\Gatewayintegration;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config;

class CrazySendMailServiceProvider  extends ServiceProvider
{
    /**
     * Registers the function.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap any package services.
     */
    public function boot()
    {
        /** publish config file to config folder for the package */
        $this->publishes([
            __DIR__.'/../config/SendMainConfig.php' =>  config_path('SendMainConfig.php'),
        ]);

        /** load routes */
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadRoutesFrom(__DIR__ . '/routes/api.php');

        /** load view, remember to pass the package folder name */
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'sendEmail');
        $this->publishes([
            __DIR__.'/resources/views' => resource_path('views/sendMainpackage'),
        ]);

        /** load migrations */
        $this->loadMigrationsFrom(__DIR__ . '/Database/migrations');
    }


}
