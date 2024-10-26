<?php

use Illuminate\Support\Facades\Route;

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
        return view('develix::pages.over-develix');
    })->name('over-develix');

    Route::get('/website-laten-maken', function () {
        return view('develix::services.web');
    })->name('web');

    Route::get('/applicatie-laten-maken', function () {
        return view('develix::services.application');
    })->name('application');

    Route::get('/seo-werkzaamheden', function () {
        return view('develix::services.seo');
    })->name('seo');

    Route::get('/social-werkzaamheden', function () {
        return view('develix::services.social');
    })->name('social');

    Route::get('/design-werkzaamheden', function () {
        return view('develix::services.design');
    })->name('design');

    Route::get('/hosting', function () {
        return view('develix::services.hosting');
    })->name('hosting');

    Route::fallback(function () {
        return response()->view('develix::errors.404', [], 404);
    });
});
