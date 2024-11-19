<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Symfony\Component\HttpKernel\Exception\HttpException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'auth' => \App\Http\Middleware\Authenticate::class,
            'verified' => \App\Http\Middleware\EnsureEmailIsVerified::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        $exceptions->render(function (HttpException $e, $request) {
            $statusCode = $e->getStatusCode();
            $message = $e->getMessage();
            \Illuminate\Support\Facades\Log::info('Exception reported: ' . $e->getMessage());
            return response()->view('errors.error', [
                'message' => !empty($message) ? $message : 'Sorry, something went wrong',
                'code' => $statusCode
            ], $statusCode);
        });
    })->create();
