<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RestrictByIP
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Voeg hier de toegestane IP-adressen toe
        $allowed_ips = [
            '185.132.108.142',
        ];

        // Controleer of het IP-adres is toegestaan
        if (!in_array($request->ip(), $allowed_ips)) {
            // Controleer het domein (host)
            $host = $request->getHost();

            if ($host === 'bryandeknikker.nl') {
                return response()->view('bryandeknikker::pages.maintenance');
            } elseif ($host === 'develix.nl') {
                return response()->view('develix::pages.maintenance');
            } else {
                return response()->view('maintenance'); // Fallback voor onbekende domeinen
            }
        }

        return $next($request);
    }
}
