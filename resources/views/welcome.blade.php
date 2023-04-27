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
    </head>
    <body class="text-gray-300 bg-gray-900 flex flex-col h-screen justify-between">
        <div class="flex flex-col">
            <h1 class="text-6xl pl-5 pt-5  drop-shadow-[5px_5px_10px_rgba(255,255,255,0.5)]"><i class="fa-brands fa-laravel mr-4"></i>Laravel Practice</h1>
            <p class="text-xl pl-20 pt-5 font-light"><span class="font-semibold">Stack:</span> Laravel, Blade Livewire, Eloquent</p>
        </div>
        <div class="self-center flex flex-col items-center gap-10">
            <i class="fa-solid text-white fa-compact-disc text-10-xl cursor-pointer max-w-max animate-spin drop-shadow-[0px_0px_50px_rgba(255,255,255,0.5)]"></i>
            <i class="text-xl">Click on Disk to continue!</i>
        </div>
        <div class="flex flex-col pl-3 pb-3 text-gray-400 text-sm">
            <a class="hover:text-gray-200 drop-shadow-[5px_5px_10px_rgba(255,255,255,0.5)] text-gray-300 transition duration-500" href="https://github.com/iLoveHanekawa/laravel-crud" target="_blank">
                <i class="fa-brands mr-2 fa-github"></i>Github
            </a>
            <p>ILoveHanekawa</p>
            <i>Laravel CRUD application.</i>            
        </div>
    </body>
</html>
