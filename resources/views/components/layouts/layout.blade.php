<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
    <script src="https://kit.fontawesome.com/fc159bf836.js" crossorigin="anonymous"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="d-flex flex-column h-100">
    <x-navbar />
    <main class="flex-grow-1 pt-5 mt-5">
        {{ $slot }}
    </main>
    <x-footer />
    @livewireScripts
</body>

</html>
