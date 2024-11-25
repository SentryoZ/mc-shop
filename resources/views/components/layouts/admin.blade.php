<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
    <script src="https://kit.fontawesome.com/fc159bf836.js" crossorigin="anonymous"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body>
    <div class="container-fluid h-100">
        <div class="row vh-100">
            <!--Sidebar-->
            <x-sidebar />

            <!-- Main content -->
            <main class="col-md-9 col-lg-10 p-0">
                {{ $slot }}
            </main>
        </div>
    </div>

    @livewireScripts
</body>

</html>
