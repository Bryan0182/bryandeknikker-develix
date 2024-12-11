<?php

namespace App\Http\Middleware;

use Closure;

class RedirectWwwToNonWww
{
    public function handle($request, Closure $next)
    {
        if ($request->getHost() === 'www.develix.nl') {
            return redirect()->to('https://develix.nl' . $request->getRequestUri(), 301);
        }

        return $next($request);
    }
}
