@extends('layout.porfolio')

@section('contenido')
    <section class="contenedor-xl" id="skills-contenedor"> {{-- contenedor principal --}}

        @include('porfolio.skills')

        @include('porfolio.perfil')

    </section>

    <section class="projects__contenedor-xl">

        @include('porfolio.projects')

        @include('porfolio.new-dev-projects')
        
        {{-- @include('porfolio.dev-projects') --}}
        
        {{-- @include('porfolio.main-projects') --}}

    </section>


    @include('porfolio.contact')

    @include('porfolio.play')

    @include('porfolio.overlay')
    
@endsection
