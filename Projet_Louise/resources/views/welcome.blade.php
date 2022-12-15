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
        <x-app-layout>
            <div class="max-w-6xl mx-auto px-6 lg:px-8">
                <h1 class="mx-6 mt-4 text-4xl font-bold leading-normal mt-0 mb-2 text-black-800">
                    Bienvenue sur Projet Louise, un blog où vous pourrez poster toutes vos photos de bébés préférées ! (Animals accepted !)
                </h1>
            </div>
        </x-app-layout>
    </div>
</body>

</html>