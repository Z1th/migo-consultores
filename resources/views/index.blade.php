<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Migo | Consultores Jurídicos</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootsnav.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-icons.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/theme-vendors.min.css')}}">
        <!-- revolution slider -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/settings.css')}}" media="screen" />
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/layers.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/navigation.css')}}">
        <!-- style sheets -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}" />
        
    </head>
    <body>
        <x-header />
        <x-hero />
        <x-about-us />
        <x-what-we-do />
        <x-migo-process />
        <x-distinctions />
        <x-mision-vision />
        <x-our-clients />
        <x-form />>
        <x-footer />

        <script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/bootsnav.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/jquery.nav.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/hamburger-menu.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/theme-vendors.min.js')}}"></script>
        <!-- revolution -->
        <script type="text/javascript" src="{{asset('assets/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/main.js')}}"></script>
    </body>
</html>
