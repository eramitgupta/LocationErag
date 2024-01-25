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
        $this->app->make('LocationErag\Get\Location');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
