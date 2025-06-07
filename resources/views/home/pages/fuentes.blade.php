@extends('layout.home')

@section('headers')
    <link rel="preload" href="{{ asset('img/home/art.svg') }}" as="image">
@endsection

@section('contenido')
    <div class="home-fuentes">

        <div class="home-fuentes__grid">
            <div class="home-fuentes__principal">
                <div class="home-fuentes__text">
                    <h2>{{ __('home_text.fonts_heading') }}</h2>
                    <p class="home-fuentes__sub">{{ __('home_text.fonts_sub') }}</p>
                    <p class="home-fuentes__desc">{{ __('home_text.fonts_desc0') }} <a href="https://www.freepik.com" target="_blank" rel="noopener noreferrer">Freepik</a> {{ __('home_text.fonts_desc1') }}</p>
                    <p class="home-fuentes__desc">{{ __('home_text.fonts_desc2') }}</p>
                </div>
            </div>
            
            <img src="{{ asset('img/home/art.svg') }}" class="home-fuentes__img" alt="Imagen Art" width="200" height="300">
            <h2>{{ __('home_text.fonts_heading') }}</h2>
        </div>
    </div>
@endsection