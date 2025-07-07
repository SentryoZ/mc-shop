@extends('components.layouts.auth')

@section('title', 'Login')

@section('content')
    <div class="flex justify-center items-center h-screen">
        <div class="w-full max-w-md px-6">
            <h1 class="text-2xl font-bold text-center mb-6">Login</h1>
            <form action="{{ route('login') }}" method="POST" class="space-y-4">
                @csrf

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="email" required autocomplete="email"
                        placeholder="you@example.com"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring focus:ring-blue-300" />
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password" id="password" required autocomplete="current-password"
                        placeholder="••••••••"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring focus:ring-blue-300" />
                </div>

                <button type="submit"
                    class="w-full bg-blue-700 hover:bg-blue-800 text-white font-medium py-2 rounded-md transition">
                    Login
                </button>
            </form>
            <div class="text-center mt-2 text-sm">
                Don't have an account?
                <a href="{{ route('register') }}" class="text-blue-600 hover:underline">Sign Up</a>
            </div>
        </div>
    </div>
@endsection
