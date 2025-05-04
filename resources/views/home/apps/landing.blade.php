@extends('layout.home')

@section('headers')
    <link rel="preload" href="{{ asset('img/home/landing.svg') }}" as="image">
@endsection

@section('contenido')
    <div class="apps">
        <div class="apps__container">

            <div id="tsparticles2" style="position: absolute; top: 0; left: 0; width: 100%; height: 100vh; z-index: -1;">
            </div>
            <div class="apps__principal">
                <img src="{{ asset('img/home/landing.svg') }}" alt="Landing Page imagen" width="200">
                <div class="apps__text">
                    <h3>Primera impresión que genera impacto</h3>

                    <div class="apps__grid">

                        <p class="apps__legend">Capturá la atención de tus visitantes con páginas optimizadas para convertir más y comunicar mejor tu propuesta</p>
                        <ul class="apps__list">
                            <li>Diseño atractivo y enfocado en objetivos <i class="c-green fa-solid fa-check"></i></li>
                            <li>Velocidad de carga optimizada <i class="c-green fa-solid fa-check"></i></li>
                            <li>Adaptadas a móviles <i class="c-green fa-solid fa-check"></i></li>
                            <li>Listas para conectar con tus campañas <i class="c-green fa-solid fa-check"></i></li>
                        </ul>
                        <div class="apps__btn-cont">
                            <a href="/contact" class="btn-grad w-full">Empecemos</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="apps__description">
                <p>Una landing page es una página pensada para cumplir un objetivo específico: generar leads, promocionar un producto o presentar una campaña. Es una herramienta clave en cualquier estrategia digital.</p>
                <p>Diseñamos landing pages centradas en la conversión, con mensajes claros, llamados a la acción efectivos y un diseño que conecta con tu audiencia. Ya sea que necesites una página para una campaña puntual o un sistema para generar múltiples landings, tenemos la solución.</p>
                <p>Te ayudamos a crear páginas que cargan rápido, se ven perfectas en todos los dispositivos y están listas para integrarse con tus herramientas de marketing.</p>
            </div>
        </div>

        @include('home.includes.choose')
    </div>
@endsection
