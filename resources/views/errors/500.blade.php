@extends('layout.home')

@section('headers')
    <link rel="preload" href="{{ asset('img/home/500.svg') }}" as="image"/>
@endsection

@section('contenido')
    <div class="error-page">
        <h3>Hasta los mejores se equivocan</h3>

        <img src="{{ asset('img/home/500.svg') }}" class="error-page__img--s" alt="Imagen error 500" width="300"/>

        <p>Ups... tocamos algo que no debíamos</p>

    </div>
@endsection
