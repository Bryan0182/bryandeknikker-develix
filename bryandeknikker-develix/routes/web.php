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
});
