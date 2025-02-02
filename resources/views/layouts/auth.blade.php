<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full" x-data="{ darkMode: localStorage.getItem('darkMode') === 'true' }"
    :class="{ 'dark': darkMode }">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Authentication') }}</title>

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Source+Code+Pro:wght@400;500;600&display=swap"
        rel="stylesheet">

    <!-- Scripts and Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="font-sans text-shark-900 antialiased bg-shark-100">
    <div class="h-screen flex bg-shark-100">
        <!-- Left Side - Login Form -->
        <div class="h-full w-1/2 flex flex-col items-center justify-center p-12">
            <h2 class="font-bold text-4xl text-primary-500 mb-4" aria-hidden="true">Recodex ID</h2>

            <div class="w-full max-w-md">
                {{ $slot }}
            </div>
        </div>

        <!-- Right Side - Blue Section -->
        <div class="h-full w-1/2 flex flex-col justify-center items-center bg-shark-950 p-12 text-primary-500">
            <div class="max-w-lg text-center">
                <h2 class="text-3xl font-bold mb-6">Connect with every application.</h2>
                <p class="text-lg mb-12">Everything you need in our easily customizable dashboard.</p>
            </div>
        </div>
    </div>

    @livewireScripts

    <script>
        // Check for saved dark mode preference or system preference
        if (localStorage.getItem('darkMode') === null) {
            localStorage.setItem('darkMode', window.matchMedia('(prefers-color-scheme: dark)').matches);
        }
    </script>
</body>

</html>
