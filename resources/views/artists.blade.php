<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <script src="https://kit.fontawesome.com/2e5130a48b.js" crossorigin="anonymous"></script>
        @vite('resources/css/app.css')
        @livewireStyles
    </head>
    <body class="text-gray-300 bg-gray-900 flex flex-col h-screen justify-start">
        <livewire:artists.create-form />
        @livewireScripts
    </body>
</html>
