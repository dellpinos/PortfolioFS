<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description" content="Portfolio desarrollador web">

    {{-- <link rel="icon" href="{{ asset('img/LogoSinFondo.png') }}" type="image/x-icon"> --}}

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
    <header class="header">

        <div class="header__video">
            <div class="header__overlay">
                <div class="contenedor-xl header__contenido-video">
                    <p class="header__texto">Hola, soy <span class="header__nombre">Martin del Pino</span></p>
                    <p class="header__texto">Desarrollador Backend - Frontend</p>
                    <div class="header__contenedor-boton">
                        <p class="header__boton">Ver mi trabajo <i class=" header__icono fa-solid fa-circle-arrow-right"></i></p>
                        

                    </div>
                </div>
            </div>

{{--             <video autoplay muted loop>
                <source src="video/concierto.mp4" type="video/mp4">
                <source src="video/concierto.ogg" type="video/ogg">
                <source src="video/concierto.webm" type="video/webm">
            </video> --}}

            

            <img src="video/cubos.png" alt="Imagen Fondo">


            
        </div>

        <div class="contenedor-xl header__contenido-header">

            <nav class="header__nav">
                <a href="#">About</a>
                <a href="#">Portfolio</a>
                <a href="#">Contacto</a>
            </nav>
        </div>

    </header>

    <main>
        <div> {{-- contenedor principal --}}

            @yield('contenido')

        </div>


    </main>

    <footer>
        {{-- <span class="footer__nombre">Martín del Pino</span> - Todos los derechos reservados {{ now()->year }} --}}

    </footer>
    @vite('resources/js/app.js')



</body>

</html>
