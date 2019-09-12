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
<body class="h-screen antialiased bg-gray-300 leading-none">
    <header class=" bg-white border-b border-gray-800">
        <div class="container  mx-auto ">
            <div class="p-8 flex">
                <div class="w-1/4 bg-gray-300">
                    <img class="w-40" src="{{ asset('/images/laravelio.png') }}" alt="Laravel IO Logo">
                </div>
                {{-- Center Navigation Link --}}
                <nav class="w-1/2 flex   justify-center text-gray-500 text-xl">
                    <a href="#" class="mr-3 hover:underline">Forum</a>
                    <a href="#" class="mr-3 hover:underline">Pastebin</a>
                    <a href="#" class="mr-3 hover:underline">Chat</a>
                    <a href="#" class="mr-3 hover:underline">Event</a>
                    <a href="#" class="mr-3 hover:underline">Community</a>
                </nav>
    
                <div class="w-1/4 bg-gray-300 flex justify-end text-gray-500 text-xl">
                    <a href="#" class="mr-2">Login</a>
                    <a href="#">Register</a>
                </div>

            </div>

        </div>
    </header>
    <section class="bg-gray-100 py-24 border-b-8 border-gray-600">
        <div class="container mx-auto w-1/2">
            <div class="w-full flex justify-center">
                <img class=" h-32" src="{{ asset('/images/laravelio.png') }}" alt="">
            </div>
            <div class="mt-6">
                <h1 class="text-2xl text-gray-700 text-center">Laravel Learning Community</h1>
                <div class="flex justify-center mt-8">
                    <button class="py-5 px-4 mr-3 bg-green-500 text-white">Join the Community</button>
                    <button class="py-5 px-4 bg-gray-500 text-white">Visit The Forum</button>
                </div>

            </div>

        </div>
    </section>
    <section class="bg-gray-300">
        <div class="container mx-auto py-16">
            <h1 class="text-center mb-16 text-4xl text-gray-800">Laravel.io in number</h1>
            <div class="flex justify-center">
                <div class="mx-12">
                    <img src="{{ asset('/images/user200.png')}}" alt="">
                    <p class="mt-4 text-center uppercase text-gray-700 text-xl font-semibold text-gray-900">43,230</p>
                    <p class="mt-2 text-center text-gray-600 uppercase">Users</p>
                </div>
                <div class="mx-12">
                    <img src="{{ asset('/images/user200.png')}}" alt="">
                    <p class="mt-4 text-center uppercase text-gray-700 text-xl font-semibold text-gray-900">43,230</p>
                    <p class="mt-2 text-center text-gray-600 uppercase">Users</p>
                </div>
                <div class="mx-12">
                    <img src="{{ asset('/images/user200.png')}}" alt="">
                    <p class="mt-4 text-center uppercase text-gray-700 text-xl font-semibold text-gray-900">43,230</p>
                    <p class="mt-2 text-center text-gray-600 uppercase">Users</p>
                </div>
            </div>

        </div>
    </section>
    <section class="bg-gray-100">
        <div class="container py-16 mx-auto">
            <h1 class="text-4xl text-gray-800 text-center font-semibold">Need help?</h1>
            <p class="text-2xl text-center text-gray-700 mt-4">Search for the solution</p>
            <input class="w-1/2 py-4 px-4 bg-gray-400 mx-auto block mt-8 outline-none appearance-none rounded-full placeholder-gray-700" placeholder="Search the thread..">
            <p class="text-xl text-center text-gray-700 mt-8">Can't find what you're looking for? Create a new thread</p>
        </div>
    </section>
    <section class="bg-gray-200">
        <div class="container mx-auto py-16">
            <h1 class="font-semibold text-3xl text-gray-900 text-center">You can help others</h1>
            <p class="font-medium mt-4 text-xl text-gray-700 text-center">Take a look at the latest unresolved threads</p>
            <div class="flex -mx-2 mt-8">
                <div class="w-1/3 px-2">
                    <div class="bg-white p-6">
                        <h1 class="text-xl text-gray-800">Laravel Multiauth</h1>
                        <div class="mt-20">
                            <span class="text-green-700 text-sm mr-2">Atul Chunchul</span>
                            <span class="text-gray-800 text-sm">Posted 3 days ago</span>
                        </div>

                    </div>
                </div>
                <div class="w-1/3 px-2">
                    <div class="bg-white p-6">
                        <h1 class="text-xl text-gray-800">Laravel Multiauth</h1>
                        <div class="mt-20">
                            <span class="text-green-700 text-sm mr-2">Atul Chunchul</span>
                            <span class="text-gray-800 text-sm">Posted 3 days ago</span>
                        </div>

                    </div>
                </div>
                <div class="w-1/3 px-2">
                    <div class="bg-white  p-6">
                        <h1 class="text-xl text-gray-800">Laravel Multiauth</h1>
                        <div class="mt-20">
                            <span class="text-green-700 text-sm mr-2">Atul Chunchul</span>
                            <span class="text-gray-800 text-sm">Posted 3 days ago</span>
                        </div>

                    </div>
                </div>
            </div>
            <div class="flex  justify-center mt-12">
                <button class="bg-green-800 text-white py-6 px-4">See all threads</button>
            </div>
        </div>
    </section>
    <footer class="bg-gray-500 text-gray-800">
        <div class="w-full flex justify-center container mx-auto p-10">
            <p class="tracking-wider leading-relaxed">Copyright © 2013 - 2019 Laravel.io</p>
        </div>
    </footer>
</body>
</html>
