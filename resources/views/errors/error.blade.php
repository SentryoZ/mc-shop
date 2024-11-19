@extends('layouts.head')

@section('title', 'Error')

@section('content')
    <div class="container-xl min-vh-100 d-flex align-items-center justify-content-center">
        <div class="text-center">
            <img src="{{ asset('images/123.png') }}" class="img-fluid" alt="Responsive image"
                 style="max-width: 100%; height: auto; width: 200px; margin-bottom: 20px">

            <h1 class="fw-bolder">Error {{ $code }}</h1>
            <p>{{ $message }}</p>
            <p>Please go back to <a href="{{ url('/') }}">home page</a></p>
        </div>
    </div>
@endsection
