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
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body class="font-sans antialiased" id="rightclickdisable">
        <div class="min-h-screen bg-gray-100">
        

            <!-- Page Content -->
            <main class="py-5">
                @include('layouts.navigation')
                @yield('content')
            </main>

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
