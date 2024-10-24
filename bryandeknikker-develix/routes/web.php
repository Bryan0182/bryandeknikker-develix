<?php

use Illuminate\Support\Facades\Route;

Route::domain('bryandeknikker.nl')->group(function () {
    Route::get('/', function () {
        return view('home');
    });
});

Route::domain('develix.nl')->group(function () {
    Route::get('/', function () {
        return view('home');
    });
});
