@extends('errors::minimal')

@section('title', __('Unauthorized'))
@section('code', '401')
@section('message')
    {{ __('Unauthorized Access. Please return to the ') }}
    <a href="{{ route('login') }}">{{ __('Login Page') }}</a>.
@endsection
