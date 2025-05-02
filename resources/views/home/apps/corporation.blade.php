@extends('layout.home')

@section('headers')
    <link rel="preload" href="{{ asset('img/home/company.svg') }}" as="image">
@endsection

@section('contenido')
    <div class="apps">
        <div class="apps__container">

            <div id="tsparticles2" style="position: absolute; top: 0; left: 0; width: 100%; height: 100vh; z-index: -1;">
            </div>
            <div class="apps__principal">
                <img src="{{ asset('img/home/company.svg') }}" alt="Choose imagen" width="200">
                <div class="apps__text">
                    <h3>Soluciones para tu sitio institucional</h3>

                    <div class="apps__grid">

                        <p class="apps__legend">Mostrá tu empresa con una web profesional, clara y alineada a tu identidad</p>
                        <ul class="apps__list">
                            <li>Diseño moderno y responsive <i class="c-green fa-solid fa-check"></i></li>
                            <li>Información de servicios y contacto <i class="c-green fa-solid fa-check"></i></li>
                            <li>Optimizado para buscadores (SEO) <i class="c-green fa-solid fa-check"></i></li>
                            <li>Enfocado en comunicar tus servicios <i class="c-green fa-solid fa-check"></i></li>
                        </ul>
                        <div class="apps__btn-cont">
                            <a href="/contact" class="btn-grad w-full">Empecemos</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="apps__description">
                <p>Un sitio web corporativo es la carta de presentación de tu empresa en Internet. Brinda confianza, comunica tus servicios y fortalece tu presencia profesional.</p>
                <p>Hoy en día, tener un sitio institucional bien desarrollado es esencial para transmitir seriedad, captar nuevos clientes y destacarte frente a la competencia.</p>
                <p>Diseñamos sitios web claros, rápidos y personalizados según tu rubro. Te ayudamos a mostrar lo que hacés, cómo lo hacés y por qué elegirte, con una solución digital a la medida de tu negocio.</p>
            </div>
        </div>

        @include('home.includes.choose')
    </div>
@endsection
