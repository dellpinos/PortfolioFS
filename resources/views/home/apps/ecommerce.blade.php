@extends('layout.home')

 {{-- Hacer preload de la imagen?? --}}

@section('contenido')
    <div class="apps">
        <div id="tsparticles2" style="position: absolute; top: 0; left: 0; width: 100%; height: 100vh; z-index: -1;"></div>
        <div class="apps__principal">
            <img src="{{ asset('img/home/commerce.svg') }}" alt="Choose imagen">
            <div class="apps__text">
                <h3>Soluciones para tu tienda online</h3>
    
                <div class="apps__grid">
    
                    <p class="bold c-orange bold">Vendé productos físicos o digitales con plataformas rápidas, seguras y
                        personalizadas</p>
                    <ul class="apps__list">
                        <li>Catálogo administrable <i class="c-green fa-solid fa-check"></i></li>
                        <li>Pasarela de pagos integrada <i class="c-green fa-solid fa-check"></i></li>
                        <li>Optimizado para móvil <i class="c-green fa-solid fa-check"></i></li>
                        <li>Estadísticas de ventas <i class="c-green fa-solid fa-check"></i></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="apps__description">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, numquam, voluptatibus hic sit consequatur minima sed aspernatur laborum unde inventore, libero illum? Dolor inventore provident eum quisquam iusto repudiandae a.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, numquam, voluptatibus hic sit consequatur minima sed aspernatur laborum unde inventore, libero illum? Dolor inventore provident eum quisquam iusto repudiandae a.</p>
            <div class="apps__btn-cont">
                <a href="#" class="btn">Comencemos</a>
            </div>
        </div>
    </div>
@endsection
