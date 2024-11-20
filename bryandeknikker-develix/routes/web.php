<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::domain('bryandeknikker.nl')->group(function () {
    Route::get('/', function () {
        return view('bryandeknikker::pages.home');
    })->name('bryandeknikker.home');

    Route::fallback(function () {
        return response()->view('bryandeknikker::errors.404', [], 404);
    });
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

    Route::get('/website-laten-maken-{slug}',
        [LocationController::class, 'show']
    )->name('location-show');

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

    Route::get('/dashboard',
        [DashboardController::class, 'dashboard'])
        ->middleware('auth')
        ->name('dashboard');

    Route::get('/blogs',
        [BlogController::class, 'index']
    )->name('blog');

    Route::get('/blogs/aanmaken',
        [BlogController::class, 'create'])
        ->middleware('auth')
        ->name('blog-create');

    Route::post('/blogs/opslaan',
        [BlogController::class, 'store'])
        ->middleware('auth')
        ->name('blog-store');

    Route::get('/blogs/{slug}',
        [BlogController::class, 'show']
    )->name('blog-show');

    Route::get('/blogs/{id}/bewerken',
        [BlogController::class, 'edit'])
        ->middleware('auth')
        ->name('blog-edit');

    Route::put('/blogs/{id}',
        [BlogController::class, 'update'])
        ->middleware('auth')
        ->name('blog-update');

    Route::delete('/blogs/{id}',
        [BlogController::class, 'destroy'])
        ->middleware('auth')
        ->name('blog-delete');

    Route::get('/inloggen',
        [AuthController::class, 'showLoginForm']
    )->name('login');

    Route::post('/inloggen',
        [AuthController::class, 'login']
    );

    Route::get('/uitloggen',
        [AuthController::class, 'getLogout'])
        ->middleware('auth')
        ->name('logout.get');

    Route::get('/gebruiker/aanmaken',
        [UserController::class, 'showRegistrationForm'])
        ->middleware('auth')
        ->name('user-create');

    Route::post('/gebruiker/opslaan',
        [UserController::class, 'register'])
        ->middleware('auth')
        ->name('user-store');

    Route::get('/gebruiker/{id}/bewerken',
        [UserController::class, 'edit'])
        ->middleware('auth')
        ->name('user-edit');

    Route::put('/gebruiker/{id}',
        [UserController::class, 'update'])
        ->middleware('auth')
        ->name('user-update');

    Route::delete('/gebruiker/{id}',
        [UserController::class, 'destroy'])
        ->middleware('auth')
        ->name('user-delete');

    Route::get('/locatie/aanmaken',
        [LocationController::class, 'create'])
        ->middleware('auth')
        ->name('location-create');

    Route::post('/locatie/opslaan',
        [LocationController::class, 'store'])
        ->middleware('auth')
        ->name('location-store');

    Route::get('/locatie/{id}/bewerken',
        [LocationController::class, 'edit'])
        ->middleware('auth')
        ->name('location-edit');

    Route::put('/locatie/{id}',
        [LocationController::class, 'update'])
        ->middleware('auth')
        ->name('location-update');

    Route::delete('/locatie/{id}',
        [LocationController::class, 'destroy'])
        ->middleware('auth')
        ->name('location-delete');

    Route::get('/faq/aanmaken',
        [FaqController::class, 'create'])
        ->middleware('auth')
        ->name('faq-create');

    Route::post('/faq/opslaan',
        [FaqController::class, 'store'])
        ->middleware('auth')
        ->name('faq-store');

    Route::get('/faq/{id}/bewerken',
        [FaqController::class, 'edit'])
        ->middleware('auth')
        ->name('faq-edit');

    Route::put('/faq/{id}',
        [FaqController::class, 'update'])
        ->middleware('auth')
        ->name('faq-update');

    Route::delete('/faq/{id}',
        [FaqController::class, 'destroy'])
        ->middleware('auth')
        ->name('faq-delete');

    Route::fallback(function () {
        return response()->view('develix::errors.404', [], 404);
    });
});
