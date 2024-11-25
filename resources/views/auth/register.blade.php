@extends('components.layouts.auth.app')

@section('title', 'Register')

@section('content')
    <div class="container-xl vh-100 align-content-center">
        <div class="row align-self-center border rounded-3 p-4">
            <div class="col-md-8 mx-auto align-self-center">
                <img src="https://static.vecteezy.com/system/resources/previews/003/689/228/non_2x/online-registration-or-sign-up-login-for-account-on-smartphone-app-user-interface-with-secure-password-mobile-application-for-ui-web-banner-access-cartoon-people-illustration-vector.jpg"
                    class="img-fluid" alt="Responsive image">

            </div>

            <div class="col-md-4 d-flex align-items-center justify-content-center">
                <div class="w-100" style="max-width: 400px;">
                    <h2 class="text-center mb-4 fw-bold">Create an Account</h2>
                    <form action="/register" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="name" name="name" placeholder="Enter your full name"
                                    value="{{ old('name') }}" required>
                            </div>
                            @error('name')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    id="email" name="email" placeholder="Enter your email" value="{{ old('email') }}"
                                    required>
                            </div>
                            @error('email')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    id="password" name="password" placeholder="Create a password" required>
                            </div>
                            @error('password')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                                <input type="password"
                                    class="form-control @error('password_confirmation') is-invalid @enderror"
                                    id="password_confirmation" name="password_confirmation"
                                    placeholder="Confirm your password" required>
                            </div>
                            @error('password_confirmation')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">Sign Up</button>
                        </div>
                    </form>
                    <p class="text-center mt-3">
                        Already have an account? <a href="{{ route('login') }}" class="text-decoration-none">Log
                            in</a>
                    </p>
                </div>
            </div>
        </div>

    </div>
@endsection
