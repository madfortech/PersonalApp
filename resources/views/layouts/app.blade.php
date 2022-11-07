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
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css?h=025df1ec88740cad5ff14bb3380da6dd')}}">
    <!-- Manifest -->
    <link rel="manifest" href="{{asset('manifest.json?h=4a9506ebdc1ac45662bbc45b48b2fd8d')}}">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:100,300,400,500,700,900&amp;display=swap">
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/styles.min.css?h=c7c38557be8a5055819d77e297deacce')}}">
</head>

<body>
    @include('layouts.nav')

    <main class="main">
        <!-- Start: 1 Row 2 Columns -->
            @yield('content')
        <!-- End: 1 Row 2 Columns -->
    </main>
    <!--End Main Comment-->
    <script src="{{asset('js/jquery.min.js?h=84e399b8f2181ccd73394fdeddff1638')}}"></script>
    <script src="{{asset('js/bootstrap.min.js?h=981245863c383366a329259d02b8172c')}}"></script>
</body>
</html>
