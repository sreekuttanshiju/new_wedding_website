<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['public/css/styles.css', 'resources/js/app.js'])
</head>
<body>
    <div class="hero">
        <video autoplay loop muted playsinline class="background-video">
            <source src="{{ asset('videos/wedding-background.mp4.mp4') }}" type="video/mp4">
            <!-- Add additional video formats if necessary (e.g., WebM, Ogg) -->
        </video>
        <div class="container">
            <h1>One Click Weddings</h1>
            <p>Plan your dream wedding with us!</p>
        </div>
    </div>
    <div>
        <x-app-layout>
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('dashboard') }}
                </h2>
            </x-slot>
        
            {{-- <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <h1 class="text-3xl font-semibold">One Click Weddings</h1>
                        </div>
                    </div>
                </div>
            </div> --}}
        </x-app-layout>
    </div>
   
    
</body>
</html>
