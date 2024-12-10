<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\Location;

class FooterLocationProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        View::composer('*', function ($view) {
            $footerLocations = Location::where('show_in_footer', true)
                ->limit(6)
                ->get(['location', 'slug']);
            $view->with('footerLocations', $footerLocations);
        });
    }

    /**
     * Register any application services.
     */
    public function register()
    {
        // Geen extra logica nodig in register voor dit voorbeeld
    }
}
