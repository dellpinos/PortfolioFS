<div class="perfil__contenedor">

    <div class="perfil__contenedor-desc">
        {{-- <div class="perfil__contenedor-img" data-aos="flip-left"> --}}
        <div class="perfil__contenedor-img">

            <picture>
                <source srcset="img/perfil.avif" type="image/avif">
                <source srcset="img/perfil.webp" type="image/webp">
                <img loading="lazy" width="400" height="600" src="img/perfil.png" alt="Imagen Perfil">
            </picture>

        </div>
        <h4 class="dark-mode">{{ __('text.iam') }}</h4>

        <p class="dark-mode">{{ __('text.iam_desc') }}</p>

    </div>

    <ul class="perfil__listado">
        <li data-aos="fade-left">Vanilla JavaScript</li>
        <li data-aos="fade-left">Laravel 10</li>
        <li data-aos="fade-left">React Js</li>
        <li data-aos="fade-left">PHP 8</li>
        <li data-aos="fade-left">Django</li>
        <li data-aos="fade-left">Python</li>
        <li data-aos="fade-left">Rest API</li>
        <li data-aos="fade-left">MySQL</li>
        <li data-aos="fade-left">Testing</li>
        <li data-aos="fade-left">SASS / CSS3</li>
        {{-- <li data-aos="fade-left">MVC</li> --}}
        <li data-aos="fade-left">HTML5</li>
        {{-- <li data-aos="fade-left">POO</li>
        <li data-aos="fade-left">Livewire</li> --}}
        <li data-aos="fade-left">Git</li>
    </ul>
</div>
