@extends('layout.home')

@section('headers')
    <link rel="preload" href="{{ asset('img/home/api.svg') }}" as="image">
@endsection

@section('contenido')
    <div class="apps">
        <div class="apps__container">

            <div id="tsparticles2" style="position: absolute; top: 0; left: 0; width: 100%; height: 100vh; z-index: -1;">
            </div>
            <div class="apps__principal">
                <img src="{{ asset('img/home/api.svg') }}" alt="Choose imagen" width="200">
                <div class="apps__text">
                    <h3>Soluciones API para tu negocio</h3>

                    <div class="apps__grid">

                        <p class="apps__legend">Automatizá procesos y conectá sistemas con APIs robustas, seguras y a medida</p>
                        <ul class="apps__list">
                            <li>Arquitectura escalable <i class="c-green fa-solid fa-check"></i></li>
                            <li>Autenticación y seguridad <i class="c-green fa-solid fa-check"></i></li>
                            <li>Documentación clara y completa <i class="c-green fa-solid fa-check"></i></li>
                            <li>Integración con servicios externos <i class="c-green fa-solid fa-check"></i></li>
                        </ul>
                        <div class="apps__btn-cont">
                            <a href="/contact" class="btn-grad w-full">Empecemos</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="apps__description">
                <p>Una API es una herramienta fundamental para modernizar tu negocio. Permite conectar aplicaciones, automatizar tareas y compartir datos de forma estructurada y segura.</p>
                <p>En un entorno digital cada vez más interconectado, contar con una API bien diseñada mejora la eficiencia, reduce errores y permite escalar tu infraestructura tecnológica sin complicaciones.</p>
                <p>Desarrollamos APIs seguras, rápidas y adaptadas a las necesidades de tu negocio. Ya sea para integrar sistemas internos, crear tu backend o conectar con otras plataformas, te ayudamos a implementar la solución perfecta para tu proyecto. Incluso si necesitás montar un sistema complejo, como una plataforma multiusuario o marketplace, podemos acompañarte en ese desafío.</p>
            </div>
        </div>

        @include('home.includes.choose')
    </div>
@endsection
