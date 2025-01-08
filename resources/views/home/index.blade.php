@extends('layout.app')

@section('contenido')
    <section class="contenedor-xl" id="skills-contenedor"> {{-- contenedor principal --}}

        @include('home.skills')

        @include('home.perfil')

    </section>

    <section class="projects__contenedor-xl">

        @include('home.projects')

        @include('home.new-dev-projects')
        
        {{-- @include('home.dev-projects') --}}
        
        {{-- @include('home.main-projects') --}}

    </section>


    @include('home.contact')

    @include('home.play')

    @include('home.overlay')
    
@endsection
