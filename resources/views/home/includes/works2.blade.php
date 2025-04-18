{{-- Logo B & N como fondo --}}

{{-- <div class="works__bg-logo" style="--factor: .3; --tiempo_op: 3s; --opacity: .7;" >
        @include('home.includes.logo_simple_bn')
    </div> --}}


{{-- Logo B & N como fondo --}}


<div class="works">

    <div class="works__text">
        <h2 class="home-heading__m">Que podemos hacer</h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui, quaerat debitis</p>
    </div>

    <div class="works__grid">
        <div class="works__card">
            {{-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui, quaerat debitis</p> --}}
            <img src="{{ asset('img/home/commerce.svg') }}" alt="#">
            <h4>E-Commerce</h4>
        </div>
        <div class="works__card">
            {{-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui, quaerat debitis</p> --}}
            <img src="{{ asset('img/home/store.svg') }}" alt="#">
            <h4>Store</h4>
        </div>
        <div class="works__card">
            {{-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui, quaerat debitis</p> --}}
            <img src="{{ asset('img/home/career.svg') }}" alt="#">
            <h4>Portfolio Profesional</h4>
        </div>
        <div class="works__card">
            {{-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui, quaerat debitis</p> --}}
            <img src="{{ asset('img/home/brand.svg') }}" alt="#">
            <h4>Landing Pages</h4>
        </div>
    </div>
</div>