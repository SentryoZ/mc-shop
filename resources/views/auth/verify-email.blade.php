@extends('layouts.head')

@section('title', 'Verify Email')

@section('content')
    <div class="container-xl min-vh-100 d-flex align-items-center justify-content-center">
        <div class="text-center border rounded-3 p-4">
            <img src="{{ asset('images/7285521.png') }}" class="img-fluid" alt="Responsive image"
                 style="max-width: 100%; height: auto; width: 200px; margin-bottom: 20px">
            @if (session('email_resend'))
                <div class="alert alert-success" role="alert">
                    A fresh verification link has been sent to your email address.
                </div>
                <p>Still didn't receive your email? Please check your spam folder or
                <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <button type="submit" class="btn btn-link p-0 m-0 align-baseline">Resend Verification Email</button>
                </form>
            @elseif (session('email_verified'))
                <div class="alert alert-success" role="alert">
                    Your email has been verified. Please login to continue. <a
                        href="{{ route('login.post') }}">Login</a>
                </div>
            @else
                <h1>Please Verify Your Email</h1>
                <div class="alert alert-warning" role="alert">
                    Please check your email for the verification link.
                </div>
                <p>Almost there! We have sent you an email to verify your email address.</p>
                <p>Didn't receive an email?
                <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <button type="submit" class="btn btn-link p-0 m-0 align-baseline">Resend Verification Email</button>
                </form>
            @endif
            <p>Thanks,<br>{{ config('app.name') }}</p>
        </div>
    </div>
@endsection
