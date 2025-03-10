<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GzipCompressionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Check if the client supports gzip compression
        if ($request->headers->has('Accept-Encoding') && strpos($request->header('Accept-Encoding'), 'gzip') !== false) {
            $response->headers->set('Content-Encoding', 'gzip');
            $response->headers->set('Vary', 'Accept-Encoding');
            $response->setContent(gzencode($response->getContent(), 9));
            $response->headers->set('Content-Length', strlen($response->getContent()));
        }

        return $response;
    }
}
