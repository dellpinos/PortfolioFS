@extends('layout.home')

@section('contenido')
    <div class="body-overlay"></div>

    {{-- @include('home.includes.logo') --}}

    @include('home.includes.logo_section')

    @include('home.includes.hero')

    @include('home.includes.plan')

    <div class="home-gradient">
        @include('home.includes.works')

        @include('home.includes.info')
    </div>

    @include('home.includes.marquee')
    
    @include('home.includes.services')
    
    @include('home.includes.about')

    @include('home.includes.choose')

    @include('home.includes.contact')

@endsection
