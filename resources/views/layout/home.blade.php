<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description" content="Desarrollo Web & Soluciones Digitales">

    <link rel="icon" href="{{ asset('img/home/dp_logo.png') }}" type="image/x-icon">

    @yield('headers')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Pacifico&family=Quicksand:wght@300..700&display=swap"
        rel="stylesheet">


    <title>Dellpinos — Desarrollo Web & Soluciones Digitales</title>

    @vite('resources/scss/app.scss')
</head>

<body class="home-body">

    {{-- Preloader --}}

    <div id="preloader">
        <div style="--factor: .12; --tiempo_op: 0s; --tiempo_delay: 0s;">
            @include('home.includes.logo_simple')
        </div>
        <h2 class="preloader-home__logo-text">DellPinos</h2>
    </div>

    {{-- Preloader --}}

    <!-- Google Analytics -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-TT2K6QN74N"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-TT2K6QN74N');
    </script>

    <!-- Google Analytics -->


    <header class="home-header">

        <a class="home-header__logo" href="/">
            <div style="--factor: .12; --tiempo_op: 3s;">
                @include('home.includes.logo_simple')
            </div>
            <h2 class="home-header__logo-text">DellPinos</h2>
        </a>

        <nav class="home-header__nav">
            <a href="/" class="home-header__enlace">Home</a>
            <a href="#home-works-container" class="home-header__enlace">Apps</a>
            <a href="#home-logo-services-container" class="home-header__enlace">Servicios</a>
            <a href="#" class="home-header__enlace">Nosotros</a>

            <a href="/contact" class="btn-grad">Contacto</a>
        </nav>

    </header>


    <main class="relative">

        @yield('contenido')

    </main>

    <footer class="home-footer">
        {{-- <a href="#home-header" class="scroll-smooth">
            <i class="home-footer__icono fa-solid fa-circle-arrow-up"></i>
        </a> --}}
        <div class="home-footer__logo">
            <div style="--factor: .12; --tiempo_op: 3s;">
                @include('home.includes.logo_simple')
            </div>
            <h2>DellPinos</h2>
        </div>

        <p>- &copy; dellpinos - {{ __('text.copyright') }} {{ now()->year }} -</p>

    </footer>
    @vite('resources/js/appHome.js')
    <script src="https://www.google.com/recaptcha/api.js?render=6Ld_PxYqAAAAAPnzJAv6j0s62YqfpCJHstnYbxqE"></script>
    <script src="https://cdn.jsdelivr.net/npm/tsparticles@2.11.1/tsparticles.bundle.min.js"></script>

</body>

</html>
