@extends('layout.home')

@section('headers')
    <link rel="preload" href="{{ asset('img/home/art.svg') }}" as="image">
@endsection

@section('contenido')
    <div class="home-fuentes">

        <div class="home-fuentes__principal">

            <div class="home-fuentes__text">
                <h2>Atribuciones</h2>
                <p class="home-fuentes__sub">Atribuciones requeridas por las licencias de uso de contenido gratuito</p>

                <p class="home-fuentes__desc">Este sitio utiliza recursos visuales obtenidos de <a href="https://www.freepik.com" target="_blank" rel="noopener noreferrer">Freepik</a> bajo licencia gratuita con atribución. Agradecemos a los artistas y diseñadores que comparten su trabajo en esa plataforma.</p>

                <p class="home-fuentes__desc">Si alguno de los autores desea que se actualicen los créditos con información más precisa, puede contactarnos mediante el formulario de contacto.</p>
            </div>

        </div>

        <img src="{{ asset('img/home/art.svg') }}" class="home-fuentes__img" alt="Imagen Art" width="200">

    </div>
@endsection
