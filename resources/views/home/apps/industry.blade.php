@extends('layout.home')

@section('headers')
    <link rel="preload" href="{{ asset('img/home/delivery.svg') }}" as="image">
@endsection

@section('contenido')
    <div class="apps">
        <div class="apps__container">

            <div id="tsparticles2" style="position: absolute; top: 0; left: 0; width: 100%; height: 100vh; z-index: -1;">
            </div>
            <div class="apps__principal">
                <img src="{{ asset('img/home/delivery.svg') }}" alt="Industria imagen" width="200">
                <div class="apps__text">
                    <h3>Soluciones digitales para la industria</h3>

                    <div class="apps__grid">

                        <p class="apps__legend">Optimizá tus procesos con herramientas digitales diseñadas para mejorar la eficiencia, trazabilidad y comunicación interna</p>
                        <ul class="apps__list">
                            <li>Automatización de tareas administrativas <i class="c-green fa-solid fa-check"></i></li>
                            <li>Paneles de control personalizados <i class="c-green fa-solid fa-check"></i></li>
                            <li>Integración con sistemas existentes <i class="c-green fa-solid fa-check"></i></li>
                            <li>Acceso seguro desde cualquier dispositivo <i class="c-green fa-solid fa-check"></i></li>
                        </ul>
                        <div class="apps__btn-cont">
                            <a href="/contact" class="btn-grad w-full">Empecemos</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="apps__description">
                <p>La transformación digital en la industria permite automatizar procesos, reducir errores y mejorar la productividad. Ya sea en logística, producción o gestión interna, la tecnología puede marcar una diferencia real.</p>
                <p>Desarrollamos soluciones a medida que se adaptan a tus flujos de trabajo y necesidades específicas. Desde sistemas de gestión interna hasta plataformas de seguimiento y control, trabajamos para que tu empresa sea más eficiente y competitiva.</p>
                <p>No importa si estás dando tus primeros pasos en lo digital o buscás escalar tus sistemas actuales, te ayudamos a construir herramientas robustas, escalables y seguras para el entorno industrial.</p>
            </div>
        </div>

        @include('home.includes.choose')
    </div>
@endsection
