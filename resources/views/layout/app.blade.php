<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description" content="Portfolio desarrollador web">

    <link rel="icon" href="{{ asset('img/logoPortfolio.png') }}" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;400;700;900&display=swap" rel="stylesheet">


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
                        <p class="header__texto">Desarrollador Backend - Frontend</p>

                    </div>
                    <div class="header__contenedor-boton">
                        <a href="#skills" class="header__boton scroll-smooth">Ver mi trabajo <i href="#skills"
                                class=" header__icono fa-solid fa-circle-arrow-right"></i></a>

                    </div>
                </div>
            </div>

            <video autoplay muted loop>
                {{--                 <source src="video/cubos_hd.webm" type="video/webm"> --}}
                {{--                         <source src="video/cubos_hd.mp4" type="video/mp4"> --}}

                <source src="video/lineas_slow_hd2.mp4" type="video/mp4">

                {{--     <source src="video/lineas_hd.webm" type="video/webm"> --}}
                {{--     <source src="video/black_net_slow_hd.webm" type="video/webm">
    <source src="video/black_net_slow_hd.mp4" type="video/mp4"> --}}

            </video>

        </div>

        <div class="header__contenido-header">
            <nav class="header__nav">

                <i class="header__nav-menu-movil fa-solid fa-ellipsis-vertical"></i>

                <a class="scroll-smooth" href="#skills">Perfil</a>
                <a class="scroll-smooth" href="#proyectos-personales">Proyectos</a>
                <a class="scroll-smooth" href="#galeria">Portfolio</a>
                <a class="scroll-smooth" href="#contacto">Contacto</a>
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



        <p><span class="footer__nombre">Martín del Pino</span> - Todos los derechos reservados {{ now()->year }}</p>

    </footer>
    @vite('resources/js/app.js')



</body>

</html>
