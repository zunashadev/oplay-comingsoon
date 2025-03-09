<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Oplay - Coming Soon</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-screen overflow-hidden bg-me-5 flex justify-center items-center">

    <div class="flex flex-col space-y-16 items-center">
        <div class="flex flex-col items-center">
            <div class="flex items-center space-x-3">
                <img src="{{ asset('logo/logo.png') }}" alt="Logo" class="w-8 sm:w-10 h-auto">
                <p class="text-me-1 text-2xl sm:text-4xl font-league-spartan font-bold">OPLAY</p>
            </div>
            <div class="relative inline-block">
                <span class="absolute inset-x-0 bottom-0 bg-me-3 w-full h-1/2 -z-10"></span>
                <h1 class="text-me-1 text-3xl sm:text-4xl md:text-5xl font-lobster-fugu">our play!</h1>
            </div>
        </div>

        <div class="relative inline-block">
            <img src="{{ asset('patterns/pattern.png') }}" alt="Logo" class="absolute inset-x-0 bottom-0 -z-10 w-full scale-110 md:scale-130 lg:scale-150">
            <h1 class="text-me-1 text-center text-5xl md:text-7xl lg:text-9xl xl:text-10xl font-league-spartan font-bold">Coming Soon</h1>
        </div>

        <div class="flex items-center space-x-12 mt-12">
            <a href="https://www.instagram.com/oplayindonesia" target="_blank">
                <div class="bg-me-3 rounded-full size-10 md:size-12 lg:size-14 xl:size-16 flex items-center justify-center">
                    <img src="{{ asset('icons/instagram.png') }}" alt="Logo" class="size-6 md:size-8 lg:size-10 xl:size-12">
                </div>
            </a>
            <a href="https://wa.me/6285117247636" target="_blank">
                <div class="bg-me-3 rounded-full size-10 md:size-12 lg:size-14 xl:size-16 flex items-center justify-center">
                    <img src="{{ asset('icons/whatsapp.png') }}" alt="Logo" class="size-6 md:size-8 lg:size-10 xl:size-12">
                </div>
            </a>
            <a href="https://www.youtube.com/oplayindonesia" target="_blank">
                <div class="bg-me-3 rounded-full size-10 md:size-12 lg:size-14 xl:size-16 flex items-center justify-center">
                    <img src="{{ asset('icons/youtube.png') }}" alt="Logo" class="size-8 md:size-10 lg:size-12 xl:size-14">
                </div>
            </a>
        </div>
    </div>

</body>

</html>
