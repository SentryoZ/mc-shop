<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureEmailIsVerified
{
    public function handle(Request $request, Closure $next): Response
    {
        if (
            ! $request->user() ||
            ($request->user() instanceof MustVerifyEmail &&
                ! $request->user()->hasVerifiedEmail())
        ) {

            if ($request->expectsJson()) {
                return response()->json([
                    'message' => 'Please verify your email address.',
                    'status' => 401
                ], 401);
            }

            return abort(404);
        }

        return $next($request);
    }
}
