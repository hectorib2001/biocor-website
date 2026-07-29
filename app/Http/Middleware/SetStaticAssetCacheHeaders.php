<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetStaticAssetCacheHeaders
{
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        if ($request->is('build/*')) {
            // Vite fingerprints these filenames with a content hash, so a
            // new deploy always ships a new URL — safe to cache forever.
            $response->headers->set('Cache-Control', 'public, max-age=31536000, immutable');
        } elseif ($request->is('fonts/*')) {
            $response->headers->set('Cache-Control', 'public, max-age=31536000, immutable');
        } elseif ($request->is('images/*')) {
            // Filenames aren't fingerprinted and do get replaced from time
            // to time, so cache for a month rather than forever.
            $response->headers->set('Cache-Control', 'public, max-age=2592000');
        }

        return $response;
    }
}
