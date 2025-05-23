@extends('layout.home')

@section('headers')
    <link rel="preload" href="{{ asset('img/home/bg_responsive.svg') }}" as="image">
@endsection

@section('contenido')
    <div class="home-fuentes">

        <div class="home-fuentes__grid">
            <div class="home-fuentes__principal">
                <div class="home-fuentes__text">
                    <h2>{{ __('home_text.resp_heading') }}</h2>
                    <p class="home-fuentes__sub">{{ __('home_text.resp_sub') }}</p>
                    <p class="home-fuentes__desc">{{ __('home_text.resp_desc0') }}</p>
                    <p class="home-fuentes__desc">{{ __('home_text.resp_desc1') }}</p>
                    <p class="home-fuentes__desc">{!! __('home_text.resp_desc2') !!}</p>
                </div>
            </div>

            <img src="{{ asset('img/home/bg_responsive.svg') }}" class="home-fuentes__img" alt="Imagen Responsive" width="200" height="300">
            <h2>{{ __('home_text.resp_heading') }}</h2>
        </div>

        @include('home.includes.choose')
    </div>
@endsection