<!DOCTYPE html>
<html lang="{{ $htmlLang ?? 'es' }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description" content="{{ __('home_text.meta_desc') }}">

    <link rel="icon" href="{{ asset('img/home/dp_logo.png') }}" type="image/x-icon">

    @yield('headers')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Pacifico&family=Quicksand:wght@300..700&display=swap"
        rel="stylesheet">

    <title>Dellpinos — {{ __('home_text.title') }}</title>

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

        <a class="home-header__logo" href="{{ route('index') }}">
            <div style="--factor: .12; --tiempo_op: 3s;">
                @include('home.includes.logo_simple')
            </div>
            <h2 class="home-header__logo-text">DellPinos</h2>
        </a>
        <nav class="home-header__nav">
            <a href="{{ route('index') }}" class="home-header__enlace">{{ __('home_text.nav_home') }}</a>
            <a href="{{ route('index') }}#home-works-container"
                class="home-header__enlace">{{ __('home_text.nav_apps') }}</a>
            <a href="{{ route('index') }}#home-logo-services-container"
                class="home-header__enlace">{{ __('home_text.nav_services') }}</a>
            <a href="{{ route('index') }}#home-about-container"
                class="home-header__enlace">{{ __('home_text.nav_about') }}</a>
            <a href="{{ route('contact') }}" class="btn-grad">{{ __('home_text.nav_contact') }}</a>
        </nav>

    </header>

    <main class="relative">

        @yield('contenido')

    </main>

    <footer class="home-footer">

        <div class="home-footer__nav">
            <div class="home-footer__btn-container">
                <a href="{{ route('contact') }}" class="home-footer__btn">{{ __('home_text.nav_contact') }}</a>
            </div>
            <nav>
                <div class="home-footer__link-wrapper">
                    <a href="{{ route('contact') }}">{{ __('home_text.nav_contact') }}</a>
                    <a href="{{ route('index') }}#home-logo-services-container">{{ __('home_text.nav_services') }}</a>
                </div>
                <div class="home-footer__link-wrapper">
                    <a href="{{ route('index') }}#home-works-container">{{ __('home_text.nav_apps') }}</a>
                    <a href="{{ route('fuentes') }}">{{ __('home_text.nav_fonts') }}</a>
                </div>
            </nav>
        </div>
        <a class="home-footer__logo" href="{{ route('index') }}">
            <div style="--factor: .12; --tiempo_op: 3s;">
                @include('home.includes.logo_simple')
            </div>
            <h2>DellPinos</h2>
        </a>
        <p>- &copy; {{ __('home_text.copyright') }} {{ now()->year }} -</p>

    </footer>
    @vite('resources/js/appHome.js')
    <script src="https://www.google.com/recaptcha/api.js?render=6Ld_PxYqAAAAAPnzJAv6j0s62YqfpCJHstnYbxqE"></script>
    <script src="https://cdn.jsdelivr.net/npm/tsparticles@2.11.1/tsparticles.bundle.min.js"></script>


    {{-- Botón Idioma --}}
    <div class="home-lang__container">
        @if (($htmlLang ?? 'es') === 'es')
            <a href="{{ route('home.language', 'en') }}" class="home-lang__btn">
                <p>ES</p>
                <i class="home-lang__icon fa-solid fa-globe"></i>
            </a>
        @else
            <a href="{{ route('home.language', 'es') }}" class="home-lang__btn">
                <p>EN</p>
                <i class="home-lang__icon fa-solid fa-globe"></i>
            </a>
        @endif
    </div>
    {{-- Botón Idioma --}}

</body>

</html>
