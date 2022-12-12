<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Projet Louise') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: white;
        }
    </style>
</head>

<body class="antialiased">
    <div class="">
        <!-- @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            <img src="{{ asset('img/cat.png') }}" alt="a cute kitten">
            @auth
            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Tableau de bord</a>
            @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">S'enregistrer</a>
            @endif
            @endauth
        </div>
        @endif -->
        <x-app-layout>
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <h1 class="text-4xl font-normal leading-normal mt-0 mb-2 text-black-800">
                    Bienvenue sur Projet Louise, un blog où vous pourrez poster toutes vos photos de bébés préférées ! (Animals accepted !)
                </h1>
            </div>
        </x-app-layout>
    </div>
</body>

</html>