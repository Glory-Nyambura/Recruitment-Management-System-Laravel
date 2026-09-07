<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', config('app.name', 'TalentBridge'))</title>

        <link rel="stylesheet" href="{{ asset('CSS/style.css') }}">

        @livewireStyles
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
        <body>
        @include('layouts.navigation')

        <div class="site-content">
            @yield('content')
        </div>

        <footer class="site-footer">
            <div class="container footer-container">
                <div class="footer-brand">
                    <strong>TalentBridge</strong>
                    <p>Connecting talented professionals with outstanding career opportunities across Kenya.</p>
                </div>
                <div class="footer-links">
                    <h4>Quick Links</h4>
                    <a href="{{ route('home') }}">Home</a>
                    <a href="{{ route('careers') }}">Careers</a>
                    <a href="{{ route('about') }}">About</a>
                </div>
                <div class="footer-bottom">
                    <p>&copy; {{ date('Y') }} TalentBridge. All rights reserved.</p>
                </div>
            </div>
        </footer>

    @livewireScripts
    </body>
</html>
