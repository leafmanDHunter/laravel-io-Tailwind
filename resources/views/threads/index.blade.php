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
  <header class="bg-white border-b mb-4">
      <div class="container mx-auto"> 
          <div class="flex border-b">
              <div class="w-1/4 py-4">
                  <img class="w-40" src="{{ asset('/images/laravelio.png') }}" alt="Laravel IO Logo">
              </div>
              <nav class="w-1/2 flex  justify-center">
                  <a href="#" class="mr-8 py-6 text-gray-500 border-b-2 border-green-700">Forum</a>
                  <a href="#" class="mr-8 py-6 text-gray-600">Pastebin</a>
                  <a href="#" class="mr-8 py-6 text-gray-600">Chat</a>
                  <a href="#" class="mr-8 py-6 text-gray-600">Jobs</a>
                  <a href="#" class="py-6 text-gray-600">Community</a>
              </nav>
              <div class="w-1/4">
                  <a href="#" class="inline-block py-6 mr-8 text-gray-500">Login</a>
                  <a href="#" class="inline-block py-6 text-gray-500">Register</a>
              </div>
          </div>
    
          <div class="flex justify-between items-center py-4">
              <h1 class="text-xl">Forum</h1>
              <input class="appearance-none border-2 py-2 px-4 rounded outline-none" type="text" placeholder="Search for Threads...">
          </div>

      </div>
  </header>

  {{-- Next Section is the body of the page two grid --}}

  <section class="container mx-auto">
      {{-- Row Container  --}}
    <div class="flex -mx-4">
        {{-- Column 1 --}}
        <div class="w-3/4 px-4">
            <div class="rounded bg-gray-100">
                @foreach ($threads as $thread)
                    <div class="py-4 pl-4 pr-16 border-b relative">
                        <div class="mb-4">
                            <h2 class="text-lg mb-2">{{$thread['title']}}</h2>
                            <p class="text-sm text-gray-800 truncate">{{ $thread['preview'] }}</p>
                        </div>
                        <div class="flex">
                            <div class="flex items-center text-xs text-gray-700 mr-6">
                                <p>
                                    <a class="text-green-700" href="">{{$thread['author']}}</a>
                                    <span>{{ $thread['created_at']->diffForHumans() }}</span>
                                </p>
                            </div>
                            <div>
                                <span class="inline-block py-1 px-2 bg-gray-400 text-xs rounded-sm text-gray-600"> 
                                    {{ $thread['tags'] }}
                                 </span>
                                <span class="inline-block py-1 px-2 bg-gray-400 text-xs rounded-sm text-gray-600"> 
                                    {{ $thread['tags'] }}
                                 </span>
                            </div>

                        </div>
                        <div class="absolute top-0 right-0 mt-6 mr-6 flex items-center text-xs">
                            {{ $thread['reply_count']}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
       
        {{--  Column 2 --}}
        <div class="w-1/4 px-4">
            <div class="py-2">
                <div class="mb-8">
                     <button class="block py-3 px-4 bg-green-700 text-center font-semibold text-gray-200 rounded hover:bg-green-900">
                         Create Thread
                     </button>
                </div>
                <div>
                    <h3 class="text-gray-700 text-xs uppercase tracking-widest mb-2">Tags</h3>
                    <div>
                        <a href="" class="block py-2 px-3 text-sm bg-gray-100 font-bold rounded mb-1">{{$tags[0]}}</a>
                        @foreach (collect($tags)->slice(1) as $tag)
                            <a href="" class="block py-2 px-3 text-sm text-gray-700 mb-1">{{$tag}}</a>
                        @endforeach
                    </div>
                </div>

            </div>
        
        </div>
    </div>

  </section>

  </body>
</html>
