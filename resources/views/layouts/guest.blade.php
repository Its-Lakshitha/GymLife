<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'GymLife') }}</title>

    <link rel="icon" type="image/png" href="/img/favicon/favicon-96x96.png" sizes="96x96"/>
    <link rel="icon" type="image/svg+xml" href="/img/favicon/favicon.svg"/>
    <link rel="shortcut icon" href="/img/favicon/favicon.ico"/>
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png"/>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .auth-bg {
            background-image: linear-gradient(to bottom, rgba(10, 10, 10, 0.85), rgba(10, 10, 10, 0.95)),
                              url('/img/banner-bg.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
        .auth-card {
            background: rgba(17, 17, 17, 0.85);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.06);
        }
        .auth-input {
            background: rgba(255, 255, 255, 0.05) !important;
            border: 1px solid rgba(255, 255, 255, 0.12) !important;
            color: #e5e7eb !important;
            transition: border-color 0.2s, box-shadow 0.2s;
        }
        .auth-input:focus {
            border-color: #ef4444 !important;
            box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.15) !important;
        }
        .auth-input::placeholder {
            color: #6b7280;
        }
        .auth-label {
            color: #d1d5db;
            font-family: 'Oswald', sans-serif;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            font-size: 12px;
            font-weight: 500;
        }
        .auth-btn {
            background: #ef4444;
            color: #fff;
            font-family: 'Oswald', sans-serif;
            font-weight: 600;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            transition: all 0.3s;
        }
        .auth-btn:hover {
            background: #dc2626;
            transform: translateY(-1px);
            box-shadow: 0 4px 20px rgba(239, 68, 68, 0.35);
        }
        .auth-link {
            color: #9ca3af;
            transition: color 0.2s;
        }
        .auth-link:hover {
            color: #ef4444;
        }
        .auth-checkbox {
            border-color: rgba(255, 255, 255, 0.2) !important;
            background: rgba(255, 255, 255, 0.05) !important;
        }
        .auth-checkbox:checked {
            background-color: #ef4444 !important;
            border-color: #ef4444 !important;
        }
        .auth-divider {
            height: 3px;
            width: 50px;
            background: #ef4444;
            border-radius: 2px;
        }
    </style>
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen auth-bg flex flex-col items-center justify-center px-4 py-12">

        {{-- Logo --}}
        <div class="mb-8">
            <a href="{{ url('/') }}">
                <img src="{{ asset('img/logo/logo.png') }}" alt="GymLife" class="h-12 w-auto">
            </a>
        </div>

        {{-- Auth Card --}}
        <div class="w-full sm:max-w-md auth-card rounded-2xl shadow-2xl px-8 py-10 sm:px-10">
            {{ $slot }}
        </div>

        {{-- Back to home --}}
        <div class="mt-6">
            <a href="{{ url('/') }}" class="auth-link text-sm flex items-center gap-1.5 hover:text-red-500 transition">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Back to Home
            </a>
        </div>
    </div>
</body>
</html>
