@extends('layout.home')

@section('headers')
    <link rel="preload" href="{{ asset('img/home/porfolio.svg') }}" as="image">
@endsection

@section('contenido')
    <div class="apps">
        <div class="apps__container">

            <div id="tsparticles2" style="position: absolute; top: 0; left: 0; width: 100%; height: 100vh; z-index: -1;">
            </div>
            <div class="apps__principal">
                <img src="{{ asset('img/home/porfolio.svg') }}" alt="Porfolio imagen" width="200">
                <div class="apps__text">
                    <h3>Mostrá tu trabajo al mundo</h3>

                    <div class="apps__grid">

                        <p class="apps__legend">Diseñamos portfolios modernos, rápidos y personalizados para destacar tu perfil profesional</p>
                        <ul class="apps__list">
                            <li>Diseño adaptable a cualquier dispositivo <i class="c-green fa-solid fa-check"></i></li>
                            <li>Secciones personalizadas (proyectos, CV, contacto) <i class="c-green fa-solid fa-check"></i></li>
                            <li>Optimización para buscadores (SEO) <i class="c-green fa-solid fa-check"></i></li>
                            <li>Integración con redes sociales <i class="c-green fa-solid fa-check"></i></li>
                        </ul>
                        <div class="apps__btn-cont">
                            <a href="/contact" class="btn-grad w-full">Empecemos</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="apps__description">
                <p>Un portfolio online es la mejor forma de mostrar tus habilidades, proyectos y experiencia profesional. Te permite destacar tu perfil de forma clara y profesional, accesible desde cualquier lugar y en todo momento.</p>
                <p>En un mundo digital, tener un portfolio no es solo una ventaja, es parte de tu identidad profesional. Ya seas desarrollador, diseñador, fotógrafo o freelancer, una buena presentación online puede abrirte muchas puertas.</p>
                <p>Creamos portfolios visuales, funcionales y adaptados a vos, con un diseño pensado para resaltar lo que mejor sabés hacer. Tanto si estás empezando tu carrera como si querés renovar tu imagen, te ayudamos a construir una presencia online que hable por vos.</p>
            </div>
        </div>

        @include('home.includes.choose')
    </div>
@endsection
