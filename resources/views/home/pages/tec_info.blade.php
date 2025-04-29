@extends('layout.home')

{{-- Hacer preload de la imagen?? --}}

@section('contenido')
    <div class="apps">
        <div class="apps__container">

            <div id="tsparticles2" style="position: absolute; top: 0; left: 0; width: 100%; height: 100vh; z-index: -1;">
            </div>
            <div class="apps__principal">
                <img src="{{ asset('img/home/team.png') }}" alt="Choose imagen">
                <div class="apps__text">
                    <h3>Que es un stack?</h3>

                    <div class="apps__grid">

                        <p class="apps__legend">No es necesario tener conocimiento técnico o escoger tecnologías para iniciar tu proyecto</p>
                        <ul class="apps__list">
                            <li>Aportamos ideas <i class="c-green fa-solid fa-check"></i></li>
                            <li>Planeamos el proyecto <i class="c-green fa-solid fa-check"></i></li>
                            <li>Elegimos las tecnologías más adecuadas <i class="c-green fa-solid fa-check"></i></li>
                            <li>Te entrenamos a vos y a tu equipo <i class="c-green fa-solid fa-check"></i></li>
                        </ul>
                        <div class="apps__btn-cont">
                            <a href="#" class="btn-grad w-full">Empecemos</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="apps__description">
                <p>Al iniciar tu proyecto podés estar un poco perdido; que son las tecnologias? que es un stack? que lenguaje de programación debería escoger?. Estas preguntas pueden ser dificiles si es tu primer proyecto pero no es necesario preocuparte por ellas, nosotros nos encargamos de esta parte. Nosotros vamos a guiarte en cada paso del desarrollo y vamos a responder todas las preguntas que surjan.</p>
                <p>Tenemos un equipo experimentado que puede ayudarte a planear, si conoces las necesidades de tu proyecto podemos seguir adelante con la planificación.</p>
                <p>Nosotros nos encargamos!</p>

            </div>
        </div>

        @include('home.includes.choose')
    </div>
@endsection
