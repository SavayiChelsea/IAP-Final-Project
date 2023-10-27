<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
        
        <title>{{ config('app.name', 'Car Park') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <style>
    .row {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .col {
        flex: 0 0 48%; /* Adjust the width of the columns as needed */
        margin-bottom: 1rem; /* Add some bottom margin between the columns */
    }

    /* Apply the Figtree font to the input fields */
    input[type="text"] {
        font-family: 'figtree', sans-serif;
    }
</style>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body>
        <div class="font-sans text-gray-900 dark:text-gray-100 antialiased">
            {{ $slot }}
        </div>

        @livewireScripts
    </body>
</html>
