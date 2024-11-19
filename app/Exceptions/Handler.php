<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;
use Throwable;

class Handler extends ExceptionHandler
{
    public function report(Throwable $e)
    {
        Log::error('Exception reported: ' . $e->getMessage());
        parent::report($e);
    }

    public function render($request, Throwable $e): Response
    {

        if ($e instanceof HttpException) {
            $statusCode = $e->getStatusCode();
            $message = $e->getMessage();

            return response()->view('errors.error', [
                'message' => !empty($message) ? $message : 'Sorry, something went wrong',
                'code' => $statusCode
            ], $statusCode);
        }

        return parent::render($request, $e);
    }
}
