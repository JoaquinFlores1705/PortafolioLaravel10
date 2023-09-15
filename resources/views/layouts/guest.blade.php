<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="Portafolio Web de Joaquín Paúl Flores Moreira, aqui encontraras un vistazo a todos mis conocimientos como profesional de IT">

        <title>{{ !isset($title) ? '' : $title . ' - ' }}{{ config('app.name', 'Laravel') }}</title>

        <!-- Icon -->
        <link rel="icon" type="image/x-icon" href="{{ asset('../resources/img/logo.ico') }}">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
            <div id='app'>
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
