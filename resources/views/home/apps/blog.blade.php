@extends('layout.home')

@section('headers')
    <link rel="preload" href="{{ asset('img/home/content.svg') }}" as="image">
@endsection

@section('contenido')
    <div class="apps">
        <div class="apps__container">

            <div id="tsparticles2" style="position: absolute; top: 0; left: 0; width: 100%; height: 100vh; z-index: -1;">
            </div>
            <div class="apps__principal">
                <img src="{{ asset('img/home/content.svg') }}" alt="Choose imagen" width="200">
                <div class="apps__text">
                    <h3>Soluciones para tu blog personal o profesional</h3>

                    <div class="apps__grid">

                        <p class="apps__legend">Publicá tus ideas, artículos o novedades en plataformas rápidas, seguras y personalizadas</p>
                        <ul class="apps__list">
                            <li>Gestión de contenido simple e intuitiva <i class="c-green fa-solid fa-check"></i></li>
                            <li>Optimizado para SEO <i class="c-green fa-solid fa-check"></i></li>
                            <li>Diseño responsive y moderno <i class="c-green fa-solid fa-check"></i></li>
                            <li>Estadísticas de visitas <i class="c-green fa-solid fa-check"></i></li>
                        </ul>
                        <div class="apps__btn-cont">
                            <a href="/contact" class="btn-grad w-full">Empecemos</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="apps__description">
                <p>Un blog es una herramienta poderosa para compartir contenido, generar comunidad y posicionar tu marca personal o profesional en Internet.</p>
                <p>Contar con un blog bien diseñado te permite expresarte, comunicarte con tu audiencia y aparecer en los resultados de búsqueda de forma orgánica.</p>
                <p>Desarrollamos blogs rápidos, seguros y adaptados a tu estilo. Ya sea que quieras empezar desde cero o renovar tu sitio actual, podemos ayudarte a construir una plataforma a medida para que tu contenido se destaque.</p>
            </div>
        </div>

        @include('home.includes.choose')
    </div>
@endsection
