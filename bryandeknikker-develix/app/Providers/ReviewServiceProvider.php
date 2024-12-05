<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\Review;

class ReviewServiceProvider extends ServiceProvider
{
    public function boot()
    {
        View::composer('*', function ($view) {
            $randomReview = Review::inRandomOrder()->first();
            $view->with('randomReview', $randomReview);
        });
    }
}
