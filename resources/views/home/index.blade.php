@extends('layout.home')

@section('contenido')

    @include('home.includes.logo_section')

    @include('home.includes.hero')

    @include('home.includes.plan')

    <div class="home-mt-10">
        @include('home.includes.choose')
    </div>

    @include('home.includes.works')

    @include('home.includes.marquee')

    @include('home.includes.services')

    @include('home.includes.about')

    @include('home.includes.info')

    @include('home.includes.contact')

@endsection