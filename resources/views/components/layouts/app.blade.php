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

    <body class="bg-gray-100">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg">
        <div class="mx-auto max-w-6xl px-4">
            <div class="flex justify-between">
                <div class="flex space-x-7">
                    <div>
                        <!-- Website Logo -->
                        <a href="\" class="flex items-center px-2 py-4">
                            <span class="text-lg font-semibold text-gray-500">ShippingTracker</span>
                        </a>
                    </div>
                    <!-- Primary Navbar items -->
                    <div class="hidden items-center space-x-1 md:flex">
                        <a href="\" class="px-2 py-4 font-semibold text-gray-500 transition duration-300 hover:text-green-500">Home</a>
                        <a href="\packages-tracker" class="px-2 py-4 font-semibold text-gray-500 transition duration-300 hover:text-green-500">Packages Tracker</a>
                        <a href="#" class="px-2 py-4 font-semibold text-gray-500 transition duration-300 hover:text-green-500">Contact</a>
                    </div>
                </div>
                <!-- Mobile menu button -->
                <div class="flex items-center md:hidden">
                    <button class="mobile-menu-button">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                    </button>
                </div>
                <!-- Secondary Navbar items -->
                <div class="hidden items-center space-x-3 md:flex">
                    <a href="\customer" class="rounded px-2 py-2 font-medium text-gray-500 transition duration-300 hover:bg-green-500 hover:text-white">Log In</a>
                    <a href="\customer\register" class="rounded bg-green-500 px-2 py-2 font-medium text-white transition duration-300 hover:bg-green-400">Sign Up</a>
                    <a href="\admin" class="rounded bg-red-500 px-2 py-2 font-medium text-white transition duration-300 hover:bg-red-400">Admin</a>
                </div>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div class="mobile-menu hidden md:hidden">
            <a href="#" class="block px-4 py-2 text-sm hover:bg-green-500 hover:text-white">Home</a>
            <a href="#" class="block px-4 py-2 text-sm hover:bg-green-500 hover:text-white">Features</a>
            <a href="#" class="block px-4 py-2 text-sm hover:bg-green-500 hover:text-white">Pricing</a>
            <a href="#" class="block px-4 py-2 text-sm hover:bg-green-500 hover:text-white">Contact</a>
        </div>
    </nav>

        {{ $slot }}
    <!-- Footer -->
    <footer class="bg-white">
        <div class="mx-auto max-w-6xl overflow-hidden px-4 py-12 sm:px-6 lg:px-8">
            <p class="mt-8 text-center text-base text-gray-400">&copy; 2023 ShippingTracker, Inc. All rights reserved.</p>
        </div>
    </footer>

        @filamentScripts
        @vite('resources/js/app.js')
    </body>
</html>

<script>
    document.querySelector('.mobile-menu-button').addEventListener('click', function() {
        document.querySelector('.mobile-menu').classList.toggle('hidden');
    });
</script>
