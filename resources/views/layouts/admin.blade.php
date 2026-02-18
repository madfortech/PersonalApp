<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
      
        <title></title>
       
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
      
        <link rel="alternate" type="application/atom+xml" title="News" href="/feed">
        

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

       
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

        @vite(['resources/css/app.css','resources/js/app.js'])

        @fluxAppearance
        @livewireStyles
       

    </head>
    <body class="font-sans antialiased" id="rightclickdisable">

        {{ $slot }}

        <script>
            const myDiv = document.getElementById("rightclickdisable");

            myDiv.addEventListener("contextmenu", (event) => {
            event.preventDefault();
            });

        </script>

       
        @livewireScripts
        @fluxScripts
    </body>
</html>
