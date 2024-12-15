<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

$allowed_ips = [
    '185.132.108.142', // Voeg jouw IP-adres toe
];

// Check of het IP van de bezoeker toegestaan is
if (!in_array(request()->ip(), $allowed_ips)) {
    // Als het niet toegestaan is, en we op het bryandeknikker.nl domein zijn, toon maintenance
    $host = request()->getHost();

    if ($host === 'bryandeknikker.nl' || $host === 'www.bryandeknikker.nl') {
        Route::get('{any}', function () {
            return response()->view('bryandeknikker::pages.maintenance');
        })->where('any', '.*');
    }
}

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

    Route::post('/contact/submit',
        [ContactController::class, 'submit']
    )->name('contact.submit');

    Route::get('/over-develix', function () {
        return view('develix::pages.about-develix');
    })->name('about-develix');

    Route::get('/missie-visie', function () {
        return view('develix::pages.mission_vision');
    })->name('mission-vision');

    Route::get('/privacybeleid', function () {
        return view('develix::pages.privacy-policy');
    })->name('privacy-policy');

    Route::get('/algemene-voorwaarden', function () {
        return view('develix::pages.general-terms');
    })->name('general-terms');

    Route::get('/cookiebeleid', function () {
        return view('develix::pages.cookie-policy');
    })->name('cookie-policy');

    Route::get('/locatie/{slug}',
        [LocationController::class, 'show']
    )->name('location-show');

    Route::get('/diensten', function () {
        return view('develix::pages.services');
    })->name('services');

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

    Route::get('/klantbeoordelingen',
        [ReviewController::class, 'index']
    )->name('testimonials');

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

    Route::get('/locaties/aanmaken',
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

    Route::get('/review/aanmaken',
        [ReviewController::class, 'create'])
        ->middleware('auth')
        ->name('review-create');

    Route::post('/review/opslaan',
        [ReviewController::class, 'store'])
        ->middleware('auth')
        ->name('review-store');

    Route::get('/review/{id}/bewerken',
        [ReviewController::class, 'edit'])
        ->middleware('auth')
        ->name('review-edit');

    Route::put('/review/{id}',
        [ReviewController::class, 'update'])
        ->middleware('auth')
        ->name('review-update');

    Route::delete('/review/{id}',
        [ReviewController::class, 'destroy'])
        ->middleware('auth')
        ->name('review-delete');

    Route::get('/offerte',
        [QuoteController::class, 'showForm']
    )->name('quote');

    Route::post('/offerte',
        [QuoteController::class, 'generate']
    )->name('quote.generate');

    Route::get('/reviews',
        [ReviewController::class, 'index']
    )->name('reviews.index');

    Route::fallback(function () {
        return response()->view('develix::errors.404', [], 404);
    });

    Route::get('/api/schedule', function () {
        Artisan::call('schedule:run');
        return response('Scheduled tasks executed.', 200);
    });
});
