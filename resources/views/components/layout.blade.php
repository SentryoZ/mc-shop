<html>

<head>
    <title>{{ $title ?? 'Test' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="d-flex flex-column h-100">
    <!-- Navbar -->
    <x-navbar />

    <!-- Main content -->
    <main class="flex-grow-1 pt-5 mt-5">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <x-footer />
</body>

</html>
