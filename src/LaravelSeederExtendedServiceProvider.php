<?php

namespace MarcosTMunhoz\LaravelSeederExtended;

use Illuminate\Support\ServiceProvider;

class LaravelSeederExtendedServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        if ($this->app->runningInConsole()) {
            // publishes the configuration file
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('seeder.php'),
            ], 'config');

            // publishes the stubs files
            $this->publishes([
                __DIR__.'/../stubs' => base_path('stubs'),
            ], 'stubs');

            // Registering package commands.
            $this->commands([
                Commands\MakeSeederCommand::class,
            ]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'seeder');
    }
}
