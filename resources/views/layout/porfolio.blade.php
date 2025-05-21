<!DOCTYPE html>
<html lang="{{ $htmlLang ?? 'es' }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description" content="Portfolio of a Full-Stack Web Developer">

    <link rel="icon" href="{{ asset('img/porfolio/avatar.svg') }}" type="image/x-icon">

    <link rel="preload" href="video/circulo_azul_720.mp4" as="video">
    <link rel="preload" as="image" href="img/porfolio/perfil.webp">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Encode+Sans+SC&family=Pacifico&family=Raleway:wght@400;700&display=swap"
        rel="stylesheet">


    <title>Martín del Pino</title>

    @vite('resources/scss/app.scss')
</head>

<body class="porfolio-body">

    {{-- Preloader --}}

    <div id="preloader-portfolio">
        <div style="--factor: .12; --tiempo_op: 0s; --tiempo_delay: 0s;">
            @include('home.includes.logo_simple')
        </div>
        <h2 class="porfolio-preloader__logo-text">DellPinos</h2>
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

    <header id="header" class="header">

        @if (session('contact_success'))
            <div class="header__alert header__alert--success">
                {{ session('contact_success') }}
            </div>
        @elseif (session('contact_error'))
            <div class="header__alert header__alert--error">
                {{ session('contact_error') }}
            </div>
        @endif

        <div class="header__video">
            <div class="header__overlay">
                <div class="contenedor-xl header__contenido-video">

                    <div>
                        <p class="header__texto">{{ __('portfolio_text.hello') }} <span class="header__nombre">Martín
                                del Pino</span></p>
                        <p class="header__texto">{{ __('portfolio_text.dev') }}</p>

                    </div>
                    <div class="header__contenedor-boton">
                        <a href="#skills" class="header__boton scroll-smooth">{{ __('portfolio_text.job') }} <i
                                href="#skills" class=" header__icono fa-solid fa-circle-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <video autoplay muted loop preload="auto">
                <source src="video/circulo_azul_720.mp4" type="video/mp4">
                <source src="video/circulo_azul_720.webm" type="video/webm">
            </video>
        </div>

        <div class="header__contenido-header">
            <div class="header__nav-contenedor-movil">
                <p id="header-texto-movil">>MdP_</p>
                <i class="header__nav-menu-movil fa-solid fa-ellipsis-vertical"></i>
            </div>

            <nav class="header__nav">
                <div class="header__nav-enlaces">
                    <a class="scroll-smooth" href="#skills">{{ __('portfolio_text.profile') }}</a>
                    <a class="scroll-smooth" href="#galeria">{{ __('portfolio_text.portfolio') }}</a>
                    <a class="scroll-smooth" href="#proyectos-personales">{{ __('portfolio_text.projects') }}</a>
                    <a class="scroll-smooth" href="#contacto">{{ __('portfolio_text.contact') }}</a>
                </div>

                <div class="header__contenedor-derecha">
                    <div class="header__contenedor-DM" id="DM-btn">
                        <i class="fa-solid fa-bolt header__icono-DM"></i>
                    </div>

                    <a class="header__nav-texto-contenedor" href="https://github.com/dellpinos" target="_blank">
                        <p class="header__nav-texto" id="header-texto">>MdP_</p>
                    </a>

                    <div class="lang__container">

                        @if (($htmlLang ?? 'es') === 'es')
                            <a href="{{ route('home.language', 'en') }}" class="lang__btn">
                                <p>ES</p>
                                <i class="lang__icon fa-solid fa-globe"></i>
                            </a>
                        @else
                            <a href="{{ route('home.language', 'es') }}" class="lang__btn">
                                <p>EN</p>
                                <i class="lang__icon fa-solid fa-globe"></i>
                            </a>
                        @endif
                    </div>
                </div>
            </nav>
            <div class="header__nav-contenedor-carga">
                <div id="barra-carga" class="header__nav-carga"></div>
            </div>
        </div>
    </header>

    <main>

        @yield('contenido')

    </main>

    <footer class="footer">
        <a href="#header" class="scroll-smooth">
            <i href="#header" class="footer__icono fa-solid fa-circle-arrow-up"></i>
        </a>

        <p><span class="footer__nombre">Martín del Pino</span> - {{ __('portfolio_text.copyright') }}
            {{ now()->year }}</p>

    </footer>
    @vite('resources/js/appPorfolio.js')
    <script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.public') }}"></script>

</body>

</html>
