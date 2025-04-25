@extends('layout.home')

@section('contenido')
    <div class="body-overlay"></div>

    {{-- @include('home.includes.logo') --}}

    @include('home.includes.logo_section')

    @include('home.includes.hero')

    <div class="home-gradient">
        @include('home.includes.works')

        @include('home.includes.info')
    </div>


    @include('home.includes.plan')

    @include('home.includes.choose')

    @include('home.includes.marquee')

    @include('home.includes.services')


    @include('home.includes.about')

    @include('home.includes.contact')


@endsection




{{-- E-commerce V

Marketplace V

Catálogos de productos V

Reservas y turnos V

Landing pages V

Portfolio / presentación de marca V 

Páginas institucionales V

CRM (clientes) V

ERP básico (ventas, stock, finanzas) V

Intranet y recursos internos V

Blogs y revistas online V

Plataformas de noticias V

Plataformas de cursos V

Certificaciones digitales V

Foros V

Redes sociales V

APIs V

Integraciones de terceros (Mailchimp, MercadoPago, etc.) V

Sitios de inmobiliarias V

Bolsa de empleos V

Donaciones y ONGs V

Eventos y congresos V

Turnos para profesionales V --}}
