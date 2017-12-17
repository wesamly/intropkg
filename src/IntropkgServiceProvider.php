<?php

namespace Lsdev\Intropkg;

use Illuminate\Support\ServiceProvider;

class IntropkgServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/intropkg.php' => config_path('intropkg.php'),
        ]);
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadViewsFrom(__DIR__.'/views', 'intropkg');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/intropkg.php', 'intropkg'
        );
        $this->app->make('Lsdev\Intropkg\IntroController');
        
    }
}
