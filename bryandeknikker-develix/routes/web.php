<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::domain('bryandeknikker.nl')->group(function () {
    Route::get('/', function () {
        return view('bryandeknikker::pages.home');
    })->name('bryandeknikker.home');
});

Route::domain('develix.nl')->group(function () {
    Route::get('/', function () {
        return view('develix::pages.home');
    })->name('home');

    Route::get('/contact', function () {
        return view('develix::pages.contact');
    })->name('contact');

    Route::get('/over-develix', function () {
        return view('develix::pages.about-develix');
    })->name('about-develix');

    Route::get('/diensten', function () {
        return view('develix::pages.services');
    })->name('diensten');

    Route::get('/diensten/website', function () {
        return view('develix::services.website');
    })->name('website');

    Route::get('/diensten/applicatie', function () {
        return view('develix::services.application');
    })->name('application');

    Route::get('/diensten/seo', function () {
        return view('develix::services.seo');
    })->name('seo');

    Route::get('/diensten/social', function () {
        return view('develix::services.social');
    })->name('social');

    Route::get('/diensten/design', function () {
        return view('develix::services.design');
    })->name('design');

    Route::get('/diensten/hosting', function () {
        return view('develix::services.hosting');
    })->name('hosting');

    Route::get('/blog',
        [BlogController::class, 'index']
    )->name('blog');

    Route::get('/blog/create',
        [BlogController::class, 'create']
    )->name('blog-create');

    Route::post('/blog/store',
        [BlogController::class, 'store']
    )->name('blog-store');

    Route::get('/blog/{id}',
        [BlogController::class, 'show']
    )->name('blog-show');

    Route::fallback(function () {
        return response()->view('develix::errors.404', [], 404);
    });
});
