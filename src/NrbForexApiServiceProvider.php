<?php

namespace SachinKiranti\NrbForexApi;

use Illuminate\Support\ServiceProvider;

class NrbForexApiServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/nrb-forex-api.php' => config_path('nrb-forex-api.php'),
        ], 'config');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/nrb-forex-api.php', 'nrb-forex-api'
        );

        // Register the facade
        $this->app->singleton('nrb-forex-api', function () {
            return new NrbForexApi();
        });
    }

}