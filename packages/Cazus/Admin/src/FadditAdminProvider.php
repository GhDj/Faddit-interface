<?php

namespace Cazus\Admin;

use Illuminate\Support\ServiceProvider;

class FadditAdminProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
       // dd('worded');
        include_once __DIR__.'/Http/routes.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Cazus\Admin\Http\Controllers\FadditAdminController');
        $this->loadViewsFrom(__DIR__."/views/","faddit");
        $this->mergeConfigFrom(__DIR__."/config/faddit.php","fadditconfig");

    }
}
