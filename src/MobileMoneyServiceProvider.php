<?php

namespace Nzela\MobileMoney;

use Illuminate\Support\ServiceProvider;

class MobileMoneyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Nzela\MobileMoney\Http\Controllers\MobileMoneyController');

        /*
            $this->mergeConfigFrom(
                __DIR__.'/config/mobileMoney.php', 'mobilemoney'
            );
         */
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        
        $this->publishes([
            __DIR__.'/config/mobileMoney.php' => config_path('mobileMoney.php'),
        ]);

        $this->loadMigrationsFrom(__DIR__.'database/migrations');
    }
}
