@extends('layout.home')

@section('headers')
    <link rel="preload" href="{{ asset('img/home/calendar.svg') }}" as="image">
@endsection

@section('contenido')
    <div class="apps">
        <div class="apps__container">

            <div id="tsparticles2" style="position: absolute; top: 0; left: 0; width: 100%; height: 100vh; z-index: -1;">
            </div>
            <div class="apps__principal">
                <img src="{{ asset('img/home/calendar.svg') }}" alt="Reservas Imagen" width="200">
                <div class="apps__text">
                    <h3>Soluciones para gestionar reservas y turnos</h3>

                    <div class="apps__grid">

                        <p class="apps__legend">Automatizá la gestión de tus citas con plataformas rápidas, seguras y personalizadas</p>
                        <ul class="apps__list">
                            <li>Agenda online administrable <i class="c-green fa-solid fa-check"></i></li>
                            <li>Notificaciones por correo <i class="c-green fa-solid fa-check"></i></li>
                            <li>Optimizado para móvil <i class="c-green fa-solid fa-check"></i></li>
                            <li>Panel con estadísticas de reservas <i class="c-green fa-solid fa-check"></i
                        </ul>
                        <div class="apps__btn-cont">
                            <a href="/contact" class="btn-grad w-full">Empecemos</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="apps__description">
                <p>Una plataforma de reservas online te permite gestionar turnos de manera automática, sin llamadas ni planillas. Tus clientes pueden reservar desde cualquier lugar y en cualquier momento.</p>
                <p>En la actualidad, ofrecer un sistema de turnos digital mejora la experiencia del usuario y optimiza el tiempo de tu equipo. Es ideal para servicios profesionales, centros médicos, salones de belleza, talleres y más.</p>
                <p>Diseñamos soluciones seguras, rápidas y adaptadas a tu negocio, con funcionalidades como recordatorios automáticos, gestión de disponibilidad, y reportes de actividad. Ya sea que estés empezando o busques modernizar tu sistema actual, te ayudamos a implementar una plataforma eficaz y a medida.</p>
            </div>
        </div>

        @include('home.includes.choose')
    </div>
@endsection
