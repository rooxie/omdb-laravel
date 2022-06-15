<?php

namespace Rooxie\Laravel;

use Rooxie\OMDb;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register(): void
    {
        $configPath = __DIR__ . '/../config/omdb.php';
        $this->mergeConfigFrom($configPath, 'omdb');

        $this->app->singleton(OMDb::class, function ($app) {
            return new OMDb(config('omdb.key'));
        });
    }

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../config/omdb.php' => config_path('omdb.php'),
        ]);
    }
}