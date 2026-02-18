<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
      
        <title>@yield('title')</title>        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

      
        <link rel="alternate" type="application/atom+xml" title="News" href="/feed">
 
        
        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

        <link rel="stylesheet" href="{{asset('css/ckin.css')}}">
        @vite('resources/css/app.css')
        @fluxAppearance
        @livewireStyles
        
     <body class="font-sans antialiased" id="rightclickdisable">
        <div class="min-h-screen bg-gray-100">
          

            <!-- Page Heading -->
            @if (isset($header))
                <header class="shadow-sm">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 pt-24">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
 
                {{ $slot }}
 
            </main>
 
        </div>
      
    

        <script>
            const myDiv = document.getElementById("rightclickdisable");

            myDiv.addEventListener("contextmenu", (event) => {
            event.preventDefault();
            });

        </script>
        

        <script src="{{asset('js/ckin.js')}}"></script>
        @vite('resources/js/app.js')
        @fluxScripts
        @livewireScripts

     </body>
</html>
