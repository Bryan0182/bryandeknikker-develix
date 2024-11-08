<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;

Route::domain('bryandeknikker.nl')->group(function () {
    Route::get('/', function () {
        return view('bryandeknikker::pages.home');
    })->name('bryandeknikker.home');
});

Route::domain('develix.nl')->group(function () {
    Route::get('/', function () {
        return view('develix::pages.home');
    })->name('home');

    // Statische Pagina's
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

    Route::get('/dashboard', [DashboardController::class, 'dashboard'])
        ->middleware('auth')
        ->name('dashboard');

    // Blog Routes
    Route::get('/blogs', [BlogController::class, 'index'])->name('blog');
    Route::get('/blogs/aanmaken', [BlogController::class, 'create'])->name('blog-create');
    Route::post('/blogs/opslaan', [BlogController::class, 'store'])->name('blog-store');
    Route::get('/blogs/{id}', [BlogController::class, 'show'])->name('blog-show');
    Route::get('/blogs/{id}/bewerken', [BlogController::class, 'edit'])->name('blog-edit');
    Route::put('/blogs/{id}', [BlogController::class, 'update'])->name('blog-update');
    Route::delete('/blogs/{id}', [BlogController::class, 'destroy'])->name('blog-delete');

    // Auth Routes
    Route::get('/inloggen', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/inloggen', [AuthController::class, 'login']);
    Route::get('/uitloggen', [AuthController::class, 'getLogout'])->name('logout.get');

    // Gebruiker Routes
    Route::get('/gebruiker/aanmaken', [UserController::class, 'showRegistrationForm'])->name('user-create');
    Route::post('/gebruiker/opslaan', [UserController::class, 'register'])->name('user-store');
    Route::get('/gebruiker/{id}/bewerken', [UserController::class, 'edit'])->name('user-edit');
    Route::put('/gebruiker/{id}', [UserController::class, 'update'])->name('user-update');
    Route::delete('/gebruiker/{id}', [UserController::class, 'destroy'])->name('user-delete');

    // Fallback Route
    Route::fallback(function () {
        return response()->view('develix::errors.404', [], 404);
    });
});
