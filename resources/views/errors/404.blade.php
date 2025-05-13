@extends('layout.home')

@section('headers')
    <link rel="preload" href="{{ asset('img/home/404.svg') }}" as="image">
@endsection

@section('contenido')
    <div class="error-page">
        <h3>{{ __('errors_text.404_heading') }}</h3>

        <img src="{{ asset('img/home/404.svg') }}" class="error-page__img--b" alt="Imagen error 404" width="300">
        <p>{{ __('errors_text.404_desc') }}</p>

    </div>
@endsection
