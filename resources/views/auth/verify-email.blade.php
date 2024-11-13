@extends('layouts.head')

@section('title', 'Verify Email')

@section('content')
    <div class="container-xl min-vh-100 d-flex align-items-center justify-content-center">
        <div class="text-center border rounded-3 p-4">
            <img src="{{ asset('images/7285521.png') }}" class="img-fluid" alt="Responsive image"
                style="max-width: 100%; height: auto; width: 200px; margin-bottom: 20px">
            <h1>Please Verify Your Email</h1>
            <p>Almost there! We have sent you an email to verify your email address.</p>
            <p>Thanks,<br>{{ config('app.name') }}</p>
            <p>Didn't receive an email? <a href="{{ route('verification.send') }}">Resend Verifciation Email</a></p>
        </div>
    </div>
@endsection
