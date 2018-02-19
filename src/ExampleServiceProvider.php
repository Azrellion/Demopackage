<?php

namespace Azrellion\Demopackage;

use Illuminate\Support\Facades\App;

use Illuminate\Support\ServiceProvider;

class ExampleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes.php');
    }
    /**
     * Register the application services.
     * @return void
     */
    public function register()
    {
        App::make('Azrellion\Demopackage\ExampleController');
        $this->loadViewsFrom(__DIR__ . '/views', 'demopackage');
    }
}