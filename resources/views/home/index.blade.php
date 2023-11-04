@extends('layout.app')

@section('contenido')
    <section class="contenedor-xl" id="skills-contenedor"> {{-- contenedor principal --}}

        @include('home.skills')

        @include('home.perfil')

    </section>

    <section class="projects__contenedor-xl">

        @include('home.main-projects')

        @include('home.projects')

    </section>

    @include('home.play')

    @include('home.contact')


@endsection
