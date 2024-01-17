<?php

namespace LocationErag;

use Illuminate\Support\ServiceProvider;

class LocationEragServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->make('LocationErag\Controllers\Location');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
