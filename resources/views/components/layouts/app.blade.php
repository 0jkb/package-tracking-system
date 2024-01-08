<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />

        <meta name="application-name" content="{{ config('app.name') }}" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>{{ config('app.name') }}</title>

        <style>
            [x-cloak] {
                display: none !important;
            }
        </style>

        @filamentStyles
        @vite('resources/css/app.css')
    </head>
    <body class="">
        <!-- Header Section -->
        <header class="bg-orange-500 p-4 text-white">
            <div class="container mx-auto flex items-center justify-between">
                <!-- Left Side Content -->
                <div class="flex items-center">
                    <!-- Logo -->
                    <a href="/" class="mr-4 text-lg font-bold text-4xl">PackageTrackingSystem</a>
                    <!-- Navigation Links -->
                    <nav class="hidden md:flex">
                        <a href="{{ url('/') }}" class="mx-2 text-sm text-white {{ request()->is('/') ? 'underline' : 'hover:underline' }}">Home</a>
                        <a href="{{ url('/packages-tracker') }}" class="mx-2 text-sm text-white {{ request()->is('packages-tracker') ? 'underline' : 'hover:underline' }}">Packages Tracker</a>
                        <a href="{{ url('/pricing') }}" class="mx-2 text-sm text-white {{ request()->is('pricing') ? 'underline' : 'hover:underline' }}">Pricing</a>
                        <a href="{{ url('/shipping-calculator') }}" class="mx-2 text-sm text-white {{ request()->is('shipping-calculator') ? 'underline' : 'hover:underline' }}">Shipping Calculator</a>
                        <a href="{{ url('/contact') }}" class="mx-2 text-sm text-white {{ request()->is('contact') ? 'underline' : 'hover:underline' }}">Contact</a>
                        <!-- Other navigation links -->
                    </nav>
                </div>

                <!-- Right Side Content -->
                <div class="flex items-center">
                    <button href="\customer" class="mx-2 text-sm text-white hover:underline">Log In</button>
                    <button href="\customer\register" class="mx-2 text-sm text-white hover:underline">Sign Up</button>
                    <button href="\admin" class="mx-2 text-sm text-white hover:underline">Admin</button>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <div class="container mx-auto mt-8 p-4">
            <!-- Search and Content Section -->
            <div class="rounded-lg">
                {{ $slot }}

            </div>
        </div>

        @filamentScripts
        @vite('resources/js/app.js')
    </body>
</html>


<script>
    document.querySelector('.mobile-menu-button').addEventListener('click', function() {
        document.querySelector('.mobile-menu').classList.toggle('hidden');
    });
</script>
