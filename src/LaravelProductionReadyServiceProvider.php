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
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        //  
    }
}
