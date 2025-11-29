<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ForceHttps
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Force HTTPS in production
        if (app()->environment('production') && !$request->secure()) {
            // Check if request is from Vercel (they use X-Forwarded-Proto header)
            if ($request->header('X-Forwarded-Proto') === 'https' || 
                $request->header('X-Forwarded-Ssl') === 'on') {
                // Trust the proxy and set secure flag
                $request->server->set('HTTPS', 'on');
            } else {
                // Redirect to HTTPS
                return redirect()->secure($request->getRequestUri());
            }
        }

        return $next($request);
    }
}

