<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="flex flex-col bg-indigo-900 w-full h-screen" x-data="{showSubscribe: false}">
            <nav class="flex pt-5 justify-between container mx-auto text-indigo-200">
                <a class="text-4xl font-bold" href="/">
                    <x-application-logo class="w-16 h-16 fill-current"></x-application-logo>
                </a>
                <div class="flex justify-end">
                    @auth
                        <a href="{{route('dashboard')}}">Dashboard</a>
                    @else
                        <a href="{{route('login')}}">Login</a>
                    @endauth
                </div>
            </nav>
            <div class="flex container mx-auto items-center h-full">
                <div class="flex flex-col w-1/3 items-start">
                    <h1 class="text-white font-bold text-5xl leading-tight mb-4">Simple generic landing page to subscribe</h1>
                    <p class="text-indigo-200 text-xl mb-10">We are just checking the <span class="font-bold underline">TALL</span> stack. Would you mind subscribing?</p>
                    <x-primary-button class="bg-red-500 text-white rounded-md py-3 px-8 hover:bg-red-600" x-on:click="showSubscribe = true">Subscribe</x-primary-button>
                </div>
                <div class="flex fixed top-0 bg-gray-900 bg-opacity-60 items-center h-screen w-screen left-0" x-show="showSubscribe" x-on:click.self="showSubscribe = false" x-on:keydown.escape.window="showSubscribe = false">
                    <div class="bg-pink-500 m-auto shadow-2xl rounded-xl p-8">
                        <p class="text-white text-5xl font-extrabold text-center">Let's do it!</p>
                        <form class="flex flex-col items-center p-24">
                            <x-text-input type="email" name="" placeholder="Email address" class="px-5 py-3 w-80 border border-blue-400"/>
                            <span class="text-gray-100 text-xs">We will send you a confirmation email</span>
                            <x-primary-button class="px-5 py-3 mt-5 w-80 bg-blue-500 justify-center">Get in</x-primary-button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
