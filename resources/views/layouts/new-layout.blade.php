<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="codepixer">
    <!-- Meta Description -->
    <meta name="description" content="Kaduna State stamp duty service">
    <!-- Meta Keyword -->
    <meta name="keywords" content="Stamp Duty, Kaduna State">
    <!-- meta character set -->
    <meta charset="UTF-8">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Site Title -->
    <title>Kaduna State Stamp Duty - @yield('title')</title>

    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
        <!--
        CSS
        ============================================= -->
        <link rel="stylesheet" href="{{ asset('assets/template/css/linearicons.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/template/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/template/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/template/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/template/css/nice-select.css') }}">					
        <link rel="stylesheet" href="{{ asset('assets/template/css/animate.min.css') }}">
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">	
        <link rel="stylesheet" href="{{ asset('assets/template/css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/template/css/main.css') }}">
        <script src="{{ asset('assets/template/js/vendor/jquery-2.2.4.min.js') }}"></script>
        
    </head>


    <body>
                  @include('layouts.partials.login')
                  @include('layouts.partials.register')
        @include('layouts.partials.new-header')
            @yield('content')
        @include('layouts.partials.new-footer')

    </body>
</html>