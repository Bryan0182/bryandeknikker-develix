<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $middleware = [
        // Globale middleware
        \App\Http\Middleware\AddTrailingSlash::class,
        \App\Http\Middleware\TrimStrings::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
        \App\Http\Middleware\TrustProxies::class,
        \App\Http\Middleware\RestrictByIP::class,
    ];

    protected $middlewareGroups = [
        'web' => [
            // Middleware voor webverkeer
        ],

        'api' => [
            'throttle:api',
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],
    ];

    protected $routeMiddleware = [
        // Specifieke middleware
        'auth' => \App\Http\Middleware\Authenticate::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'restrict.ip' => \App\Http\Middleware\RestrictByIP::class,
    ];
}
