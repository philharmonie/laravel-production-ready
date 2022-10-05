<?php

namespace Philharmonie\LaravelProductionReady;

use Illuminate\Support\ServiceProvider;

class LaravelProductionReadyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        // Publishing docker configuration
        $this->publishes([
            __DIR__ . '/docker' => base_path('docker'),
        ]);
        $this->publishes([
            __DIR__ . '/Dockerfile' => base_path('Dockerfile'),
        ]);
        $this->publishes([
            __DIR__ . '/docker-compose.prod.yml' => base_path('docker-compose.prod.yml'),
        ]);
        $this->publishes([
            __DIR__ . '/.env.prod' => base_path('.env.prod'),
        ]);
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        //  
    }
}
