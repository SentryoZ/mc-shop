@extends('components.layouts.auth.app')

@section('title', 'Login')

@section('content')
    <div class="container-xl vh-100 align-content-center">
        <div class="row align-self-center border rounded-3 p-4">
            <div class="col-md-8 mx-auto align-self-center">
                <img src="https://static.vecteezy.com/system/resources/previews/003/689/228/non_2x/online-registration-or-sign-up-login-for-account-on-smartphone-app-user-interface-with-secure-password-mobile-application-for-ui-web-banner-access-cartoon-people-illustration-vector.jpg"
                    class="img-fluid" alt="Responsive image">

            </div>

            <div class="col-md-4 d-flex align-items-center justify-content-center">
                <div class="w-100" style="max-width: 400px;">
                    <h2 class="text-center mb-4 fw-bold">Login</h2>
                    <form action="{{ route('login.post') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Enter your email" required>

                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Create a password" required>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                    <p class="text-center mt-3">
                        Don't have an account ? <a href="{{ route('register') }}" class="text-decoration-none">Sign Up</a>
                    </p>
                </div>
            </div>
        </div>

    </div>
@endsection
