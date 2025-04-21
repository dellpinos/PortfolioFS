<div id="contacto-contenedor" class="home-contacto__contenedor">

    <h2 class="home-contacto__heading" id="contacto" data-aos="fade-right">{{ __('text.contact') }}</h2>

    <form action="/" method="POST" class="home-contacto__formulario-contenedor">
        @csrf
        <input type="text" placeholder="{{ __('text.ph_name') }}" name="name"
            class="home-contacto__campo @error('name') borde__error @enderror" value="{{ old('name') }}" required>
        @error('name')
            <p class=" alerta__error">{{ $message }}</p>
        @enderror

        <input type="text" placeholder="{{ __('text.ph_email') }}" name="email"
            class="home-contacto__campo @error('email') borde__error @enderror" value="{{ old('email') }}" required>
        @error('email')
            <p class=" alerta__error">{{ $message }}</p>
        @enderror

        <textarea class="home-contacto__campo" cols="30" rows="10" placeholder="{{ __('text.ph_msg') }}" name="mensaje"
            required>{{ old('mensaje') }}</textarea>
        @error('mensaje')
            <p class=" alerta__error">{{ $message }}</p>
        @enderror

        <input type="hidden" name="recaptcha_response" id="recaptchaResponse">

        <div class="home-contacto__btn-contenedor">
            <input type="submit" class="home-contacto__btn" value="{{ __('text.btn_send') }}">
        </div>
    </form>

    {{-- <p class="home-contacto__work-together">Want to work together?</p>

    <div class="home-contacto__iconos">
        <a href="https://github.com/dellpinos" target="_blank">
            <i class="home-contacto__icono fa-brands fa-github"></i>
        </a>
        <a href="https://www.linkedin.com/in/martin-del-pino-158390293" target="_blank">
            <i class="home-contacto__icono fa-brands fa-linkedin"></i>
        </a>
        <a href="https://www.youtube.com/@martindelpino1395" target="_blank">
            <i class="home-contacto__icono fa-brands fa-youtube"></i>
        </a>
    </div> --}}
</div>
