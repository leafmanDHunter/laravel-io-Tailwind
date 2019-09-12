<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel IO') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

</head>
<body class="h-screen antialiased bg-gray-400">
    {{-- Make it a two column on larger screen. --}}
    <nav>
        <div class="container mx-auto py-4 px-3">
            <a class="text-center text-gray-800 hover:underline" href="{{ url('/threads') }}">Laravel-io Design</a>
            <span class="text-red-600">|</span>
            <a class="ml-2 text-center text-gray-800 hover:underline" href="{{ url('/forum') }}">Laravel-io Design 2</a>
        </div>
    </nav>
    <div class="flex bg-gray-100">
        
        <div class="py-12 px-8 max-w-md mx-auto sm:max-w-xl lg:max-w-full lg:w-1/2 lg:py-24 lg:px-12">
            {{-- Div to controls the content of the page --}}
            <div class="xl:max-w-lg xl:ml-auto">

                <img class="h-10" src="{{ asset('/images/logo.svg') }}" alt="Workcation">
                <img class="mt-6 rounded-lg shadow-xl sm:mt-8 sm:h-64 sm:w-full sm:object-cover sm:object-center lg:hidden" src="{{ asset('/images/beach-work.jpg') }}" alt="">
                <h1 class="mt-6 text-gray-900 text-2xl font-bold leading-tight sm:mt-8 sm:text-4xl lg:text-3xl xl:text-4xl">
                    You can work from anywhere. 
                   <br class="hidden lg:inline"> <span class="text-indigo-500">
                        Take advantage of it
                    </span> 
                </h1>
                <p class="mt-2 text-gray-600 sm:mt-4 sm:text-xl">
                    Workcation helps you find work friendly rentals in beautiful location so ou can enjoy some nice weather even when you're not on vacation.
                </p>
                <div class="mt-4 sm:mt-6">
                    <a class="btn btn-indigo shadow-lg  sm:text-base" href="">Book your escape</a>
                <a class="ml-2 btn btn-gray sm:text-base" href="">Learn More.</a>
                </div>
                
            </div>
        </div>
    
        {{-- Second Div for lg device --}}
        <div class="hidden lg:block lg:w-1/2 lg:relative">
            <img class="absolute inset-0 h-full w-full object-cover object-center" src="{{ asset('/images/beach-work.jpg') }}" alt="">
        </div>


    </div>

</body>
</html>
