<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="keywords"
        content="despacho de cobranza, recuperación de cartera vencida, cobranza jurídica, optimización de activos, resolución de conflictos económicos, recuperación de activos, riesgo crediticio, relación con deudores, agencia de cobranza en Ciudad de México, preservación de imagen institucional, soluciones personalizadas de cobranza">
    <meta name="description"
        content="Descubre en nuestro despacho de cobranza en Ciudad de México servicios especializados en recuperación de cartera vencida, resolución de conflictos económicos y optimización de activos. Garantizamos soluciones personalizadas, manteniendo intacta la imagen institucional de nuestros clientes.">

    <meta property="og:image" content="{{asset('assets/images/logos/migo-logo.webp')}}" />
    <meta property="og:image:alt"
        content="Despacho de cobranza especializado en recuperación de cartera vencida y resolución de conflictos económicos." />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />

    <title>Migo Despacho de Cobranza | Resolución de Conflictos Económicos</title>
    <!--Favico -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favico/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favico/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favico/favicon-16x16.png') }}">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootsnav.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-icons.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/theme-vendors.min.css') }}">
    <!-- revolution slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/settings.css') }}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/navigation.css') }}">
    <!-- style sheets -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

<body>

    <x-header />
    <x-whatsapp-button />
    @yield('content')
    <x-footer />

    <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootsnav.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.nav.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/hamburger-menu.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/theme-vendors.min.js') }}"></script>
    <!-- revolution -->
    <script type="text/javascript" src="{{ asset('assets/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
