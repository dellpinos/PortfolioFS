<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description" content="Desarrollo Web & Soluciones Digitales">

    <link rel="icon" href="{{ asset('img/home/dp_logo.png') }}" type="image/x-icon">

    {{-- <link rel="preload" href="video/circulo_azul_720.mp4" as="video">
    <link rel="preload" as="image" href="img/porfolio/perfil.webp"> --}}



    {{-- <link rel="preload" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap"
        as="style" onload="this.onload=null;this.rel='stylesheet'">

    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;400;700;900&display=swap"
        as="style" onload="this.onload=null;this.rel='stylesheet'"> --}}

    {{-- <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+SC&display=swap" rel="stylesheet"> --}}


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


    {{-- <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet"> --}}

    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">


    <link
        href="https://fonts.googleapis.com/css2?family=Bungee&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Pacifico&display=swap"
        rel="stylesheet">



    <title>Dellpinos — Desarrollo Web & Soluciones Digitales</title>

    @vite('resources/scss/app.scss')
</head>

<body class="home-body">

    {{-- Particles --}}
    <div id="tsparticles" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></div>
    {{-- Particles --}}


    <!-- Google Analytics -->
    {{-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-TT2K6QN74N"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-TT2K6QN74N');
    </script> --}}
    <!-- Google Analytics -->

    <header class="home-header">

        <div class="home-header__logo">
            <div style="--factor: .12; --tiempo_op: 3s;">
                @include('home.includes.logo_simple')
            </div>
            <h2>DellPinos</h2>
        </div>

        <nav class="home-header__nav">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Contact</a>

            <button>Texto</button>
        </nav>

    </header>


    <main class="relative">

        @yield('contenido')

    </main>

    <footer>


        {{-- <p><span >Martín del Pino</span> - {{ __('text.copyright' ) }} {{ now()->year }}</p> --}}

    </footer>
    {{-- <script src="https://www.google.com/recaptcha/api.js?render=6Ld_PxYqAAAAAPnzJAv6j0s62YqfpCJHstnYbxqE"></script> --}}
    @vite('resources/js/appHome.js')
    <script src="https://cdn.jsdelivr.net/npm/tsparticles@2.11.1/tsparticles.bundle.min.js"></script>

</body>

</html>
