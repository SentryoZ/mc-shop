@extends('layouts.head')

@section('title', 'Forgot Password')

@section('content')
    <div class="container-xl vh-100 align-content-center">
        <div class="row align-self-center border rounded-3 p-4">
            <div class="col-md-8">
                <img src="https://static.vecteezy.com/system/resources/previews/003/689/228/non_2x/online-registration-or-sign-up-login-for-account-on-smartphone-app-user-interface-with-secure-password-mobile-application-for-ui-web-banner-access-cartoon-people-illustration-vector.jpg"
                    class="img-fluid" alt="Responsive image">
            </div>
            <div class="col-md-4 d-flex align-items-center justify-content-center">
                <div class="w-100" style="max-width: 400px;">
                    <h2 class="text-center mb-4 fw-bold">Forgot Password</h2>
                    <form>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                <input type="email" class="form-control" id="email" placeholder="Enter your email"
                                    required>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">Send Password Reset Link</button>
                        </div>
                    </form>
                    <p class="text-center mt-3">
                        <a href="{{ url('/login') }}" class="text-decoration-none">Back to Login</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
