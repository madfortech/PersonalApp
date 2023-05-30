<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'section') </title>
    <meta name="theme-color" content="rgb(162,210,255)">
    <meta name="twitter:title" content="Personal App ">
    <meta name="twitter:description" content="Description goes here">
    <meta name="twitter:card" content="summary">
    <meta name="Author" content="Himanshu Nishad">
    <meta name="Keywords" content="personal app , photography, blog,collections">
    <meta name="Description" content="Description goes here">
    <meta property="og:type" content="website">
    <meta property="og:description" content="Description goes here">
    <meta property="og:title" content="Personal App ">
    <meta name="description" content="description goes here ">
     
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Styles -->

    <style> 
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500;600;700;800&display=swap'); 
    </style>

    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Delicious+Handrawn&family=Nanum+Gothic:wght@400;700;800&display=swap" rel="stylesheet">
    
 
    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <style>
        body{
            font-family: 'Delicious Handrawn', cursive;
            font-family: 'Nanum Gothic', sans-serif;
        }
    </style>

</head>

<body class="bg-gray-300">
    @include('layouts.nav')

    <main>
       @yield('content')
    </main>
 
   
     @yield('scripts')
</body>
</html>
