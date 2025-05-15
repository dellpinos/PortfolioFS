@extends('layout.home')

@section('headers')
    <link rel="preload" href="{{ asset('img/home/500.svg') }}" as="image"/>
@endsection

@section('contenido')
    <div class="error-page">
        <h3>{{ __('errors_text.500_heading') }}</h3>

        <img src="{{ asset('img/home/500.svg') }}" class="error-page__img--s" alt="Imagen error 500" width="200" height="300"/>

        <p>{{ __('errors_text.500_desc') }}</p>

    </div>
@endsection
