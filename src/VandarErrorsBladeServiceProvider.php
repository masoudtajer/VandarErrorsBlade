<?php

namespace Masoud5070\VandarErrorsBlade;

use Illuminate\Support\ServiceProvider;

class VandarErrorsBladeServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'masoud5070');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'masoud5070');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/vandarerrorsblade.php', 'vandarerrorsblade');

        // Register the service the package provides.
        $this->app->singleton('vandarerrorsblade', function ($app) {
            return new VandarErrorsBlade;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['vandarerrorsblade'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Publishing the configuration file.
        /*$this->publishes([
            __DIR__.'/../config/vandarerrorsblade.php' => config_path('vandarerrorsblade.php'),
        ], 'vandarerrorsblade.config');*/

        // Publishing the views.
        $this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views'),
        ], 'vandarerrorsblade.views');

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/masoud5070'),
        ], 'vandarerrorsblade.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/masoud5070'),
        ], 'vandarerrorsblade.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
