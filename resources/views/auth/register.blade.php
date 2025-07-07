@extends('components.layouts.auth')

@section('title', 'Register')

@section('content')
    <div class="h-screen flex items-center justify-center">
        <div class="w-full max-w-md px-6">
            <h1 class="text-2xl font-bold text-center mb-6">Sign Up</h1>
            <form action="{{ route('register') }}" method="POST" class="space-y-4">
                @csrf

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="email" class="w-full mt-1 px-3 py-2 border rounded-md"
                        placeholder="mail@site.com" required />
                    <p class="validator-hint hidden text-sm text-red-500">Enter a valid email address</p>
                </div>

                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" name="name" id="name" class="w-full mt-1 px-3 py-2 border rounded-md"
                        placeholder="Name" pattern="[A-Za-z][A-Za-z0-9\-]*" minlength="3" maxlength="30"
                        title="Only letters, numbers, or dashes" required />
                    <p class="validator-hint hidden text-sm text-red-500">
                        Must be 3–30 characters long and contain only letters, numbers, or dashes.
                    </p>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password" id="password" class="w-full mt-1 px-3 py-2 border rounded-md"
                        placeholder="Enter your password..." required />
                    <p class="validator-hint hidden text-sm text-red-500">
                        Please enter your password.
                    </p>
                </div>

                <button type="submit"
                    class="w-full bg-blue-700 hover:bg-blue-800 text-white font-medium py-2 rounded-md transition">
                    Register
                </button>
            </form>
            <div class="text-center mt-2 text-sm">
                Already have an account?
                <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Login</a>
            </div>
        </div>
    </div>
@endsection
