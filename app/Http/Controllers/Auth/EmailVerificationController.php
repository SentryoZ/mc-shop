<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class EmailVerificationController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            'auth',
            new Middleware('signed', only: ['verify']),
            new Middleware('throttle:6,1', except: ['send']),
        ];
    }

    public function notice(Request $request)
    {
        if ($request->user()->hasVerifiedEmail()) {
            session()->flash('email_verified', true);
        } else {
            session()->flash('email_not_verified', true);
        }


        return view('auth.verify-email');
    }


    public function verify(EmailVerificationRequest $request)
    {
        $request->fulfill();

        return redirect('/')->with('message', 'Email verified!');
    }


    public function resend(Request $request)
    {
        if ($request->user()->hasVerifiedEmail()) {
            return back()->with('message', 'Email already verified!');
        }

        $request->user()->sendEmailVerificationNotification();

        session()->flash('email_resend', true);

        return back()->with('message', 'Verification link sent!');
    }
}
