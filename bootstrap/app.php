<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Throwable;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->alias([
            'admin' => \App\Http\Middleware\AdminMiddleware::class,
        ]);
        
        // Trust Vercel proxy for HTTPS detection
        // Trust all proxies in production (Vercel uses proxies)
        $middleware->trustProxies(at: '*');
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        // Log errors to stderr for Vercel
        $exceptions->render(function (Throwable $e, $request) {
            if (app()->environment('production')) {
                error_log($e->getMessage());
                error_log($e->getTraceAsString());
            }
        });
    })->create();
