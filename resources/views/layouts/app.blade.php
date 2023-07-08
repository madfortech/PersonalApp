<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'section') </title>
    <!-- <meta name="theme-color" content="rgb(162,210,255)">
    <meta name="twitter:title" content="Personal App ">
    <meta name="twitter:description" content="Description goes here">
    <meta name="twitter:card" content="summary">
    <meta name="Author" content="Himanshu Nishad">
    <meta name="Keywords" content="personal app , photography, blog,collections">
    <meta name="Description" content="Description goes here">
    <meta property="og:type" content="website">
    <meta property="og:description" content="Description goes here">
    <meta property="og:title" content="Personal App ">
    <meta name="description" content="description goes here "> -->
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    {!! JsonLd::generate() !!}
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Styles -->

    <style> 
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500;600;700;800&display=swap'); 
    </style>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100;200;300;500;600;700&display=swap" rel="stylesheet">
        
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/fc6a0e04dd.js" crossorigin="anonymous"></script>

    
    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <style>
        body{
            font-family: 'Roboto Mono', monospace;
        }
    </style>

    @include('feed::links')

</head>

<body class="bg-gray-300">
    @include('layouts.nav')

    <main>
       @yield('content')
    </main>
 
   
    @yield('scripts')
 </body>
</html>
