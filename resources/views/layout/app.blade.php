<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description" content="Portfolio desarrollador web fullstack">

    <link rel="icon" href="{{ asset('img/icon_tab.png') }}" type="image/x-icon">

    <link rel="preload" href="video/circulo_azul_720.mp4" as="video">

    <link rel="preload" as="image" href="img/perfil.webp">

    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap"
        as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;400;700;900&display=swap"
        as="style" onload="this.onload=null;this.rel='stylesheet'">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">

    <title>Martin del Pino</title>

    @vite('resources/scss/app.scss')

</head>

<body>
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
                        <p class="header__texto">Hola, soy <span class="header__nombre">Martin del Pino</span></p>
                        <p class="header__texto">Desarrollador Fullstack</p>

                    </div>
                    <div class="header__contenedor-boton">
                        <a href="#skills" class="header__boton scroll-smooth">Ver mi trabajo <i href="#skills"
                                class=" header__icono fa-solid fa-circle-arrow-right"></i></a>

                    </div>
                </div>
            </div>

            <video autoplay muted loop>

                <source src="video/circulo_azul_720.mp4" type="video/mp4">

            </video>

        </div>

        <div class="header__contenido-header">

            <div class="header__nav-contenedor-movil">
                <p id="header-texto-movil">>MdP_</p>
                <i class="header__nav-menu-movil fa-solid fa-ellipsis-vertical"></i>
            </div>

            <nav class="header__nav">
                <div class="header__nav-enlaces">
                    <a class="scroll-smooth" href="#skills">Perfil</a>
                    <a class="scroll-smooth" href="#proyectos-personales">Proyectos</a>
                    <a class="scroll-smooth" href="#galeria">Portfolio</a>
                    <a class="scroll-smooth" href="#contacto">Contacto</a>
                </div>


                <a href="https://github.com/dellpinos" target="_blank">
                    <p class="header__nav-texto" id="header-texto">>MdP_</p>
                </a>

            </nav>

            <div class="header__nav-contenedor-carga">
                <div id="barra-carga" class="header__nav-carga"></div>
            </div>
        </div>

    </header>

    <main>
        <div class="theme-container shadow-dark display-none">
            <img id="theme-icon" src="https://www.uplooder.net/img/image/55/7aa9993fc291bc170abea048589896cf/sun.svg" alt="ERR">
          </div>

        @yield('contenido')

    </main>

    <footer class="footer">
        <a href="#header" class="scroll-smooth">
            <i href="#header" class="footer__icono fa-solid fa-circle-arrow-up"></i>
        </a>

        <p><span class="footer__nombre">Martín del Pino</span> - Todos los derechos reservados {{ now()->year }}</p>

    </footer>
    @vite('resources/js/app.js')

</body>

</html>
