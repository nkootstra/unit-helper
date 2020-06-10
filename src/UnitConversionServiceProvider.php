<?php

namespace Nkootstra\UnitConversion;

use Illuminate\Support\ServiceProvider;

class UnitConversionServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'unit-conversion');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'unit-conversion');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/units.php' => config_path('unit-conversion.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/unit-conversion'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/unit-conversion'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/unit-conversion'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/units.php', 'unit-conversion');

        // Register the main class to use with the facade
        $this->app->singleton('unit-conversion', function () {
            return new UnitConversion;
        });

        $this->app->singleton('unit-guess', function () {
            return new UnitGuess();
        });
    }
}
