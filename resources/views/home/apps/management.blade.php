@extends('layout.home')

@section('headers')
    <link rel="preload" href="{{ asset('img/home/gestion.svg') }}" as="image">
@endsection

@section('contenido')
    <div class="apps">
        <div class="apps__container">

            <div id="tsparticles2" style="position: absolute; top: 0; left: 0; width: 100%; height: 100vh; z-index: -1;">
            </div>
            <div class="apps__principal">
                <img src="{{ asset('img/home/gestion.svg') }}" alt="Gestion imagen" width="200">
                <div class="apps__text">
                    <h3>Soluciones para tu tienda online</h3>

                    <div class="apps__grid">

                        <p class="apps__legend">Vendé productos físicos o digitales con plataformas rápidas, seguras y
                            personalizadas</p>
                        <ul class="apps__list">
                            <li>Catálogo administrable <i class="c-green fa-solid fa-check"></i></li>
                            <li>Pasarela de pagos integrada <i class="c-green fa-solid fa-check"></i></li>
                            <li>Optimizado para móvil <i class="c-green fa-solid fa-check"></i></li>
                            <li>Estadísticas de ventas <i class="c-green fa-solid fa-check"></i></li>
                        </ul>
                        <div class="apps__btn-cont">
                            <a href="/contact" class="btn-grad w-full">Empecemos</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="apps__description">
                <p>Un e-commerce es una tienda online que te permite vender productos físicos o digitales en cualquier momento y desde cualquier lugar. Es una forma ágil y moderna de hacer crecer tu negocio sin depender de un espacio físico.</p>
                <p>Hoy en día, tener presencia online no es una opción, es una necesidad. Un e-commerce bien desarrollado te permite llegar a más clientes, aumentar tus ventas y competir en igualdad de condiciones con grandes marcas, sin importar el tamaño de tu negocio.</p>
                <p>Diseñamos plataformas seguras, rápidas y adaptadas a tu marca, con todo lo que necesitás para gestionar tu catálogo, cobrar online y seguir tus ventas. Ya sea que estés empezando o quieras mejorar tu tienda actual, te ayudamos a crear una solución a medida. Incluso si estás pensando en algo más grande, como un marketplace, podemos ayudarte a hacerlo realidad.</p>
            </div>
        </div>

        @include('home.includes.choose')
    </div>
@endsection
