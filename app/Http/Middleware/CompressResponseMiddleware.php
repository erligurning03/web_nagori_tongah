<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CompressResponseMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        $response->header('Content-Encoding', 'gzip');
        $response->header('Vary', 'Accept-Encoding');
        $response->setContent(gzencode($response->getContent(), 9));

        return $response;
    }
}
