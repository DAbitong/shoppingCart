<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />


    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>
<body class="font-sans antialiased">
    <x-banner />

    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')

        <!-- Page Heading -->
        <div>
    <nav class="flex items-center justify-between flex-wrap p-6 mb-6 shadow">
        <div class="block lg:hidden">
            <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
            </button>
        </div>
        <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
            <div class="text-sm lg:flex-grow">
                <a href="/" data-turbolinks-action="replace" class="block mt-4 lg:inline-block lg:mt-0 mr-4">
                    Home
                </a>
                <a href="/products" data-turbolinks-action="replace" class="block mt-4 lg:inline-block lg:mt-0 mr-4">
                    Products
                </a>
                <a href="/cart" data-turbolinks-action="replace" class="block mt-4 lg:inline-block lg:mt-0 mr-4">
                    Cart
                </a>
            </div>
        </div>
    </nav>
</div>

        <!-- Page Content -->
         <div>
    <div class="w-full flex justify-center">
        <input wire:model="search" type="text" class="shadow appearance-none border rounded w-1/2 py-2 px-3 
        text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Search products by name...">
    </div>
    <main>
        <p class="text-center p-6">
            <span class="text-4xl">Welcome!</span>
        </p> 
        @yield('content')
    </main>
</div>

    @stack('modals')

    @livewireScripts
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
