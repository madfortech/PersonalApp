<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
      
        <title>{{ config('app.name', 'Himanshu Nishad') }}</title>
 
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <script src="https://unpkg.com/feather-icons"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <link rel="alternate" type="application/atom+xml" title="News" href="/feed">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
         
    </head>
    <body class="font-sans antialiased" id="rightclickdisable">
        <div class="min-h-screen bg-gray-100">
          

            <!-- Page Heading -->
            @if (isset($header))
                <header class="shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 pt-24">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                @include('layouts.navigation')
                {{ $slot }}
            </main>

            {{-- <footer class="py-5 grid grid-rows-1 bg-emerald-300">
                @include('footer')
            </footer> --}}
        </div>
        <script>
            const myDiv = document.getElementById("rightclickdisable");

            myDiv.addEventListener("contextmenu", (event) => {
            event.preventDefault();
            });

        </script>
        <script>
            feather.replace();
        </script>
      
    </body>
</html>
