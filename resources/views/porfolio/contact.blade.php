<div id="contacto-contenedor" class="contacto__contenedor">

    <h2 class="contacto__heading" id="contacto" data-aos="fade-right">{{ __('portfolio_text.contact') }}</h2>

    <form action="{{ route('contact.send') }}" method="POST" class="contacto__formulario-contenedor">
        @csrf
        <input type="text" placeholder="{{ __('portfolio_text.ph_name') }}" name="name"
            class="contacto__campo @error('name') borde__error @enderror" value="{{ old('name') }}" required">
        @error('name')
            <p class=" alerta__error">{{ $message }}</p>
        @enderror

        <input type="text" placeholder="{{ __('portfolio_text.ph_email') }}" name="email"
            class="contacto__campo @error('email') borde__error @enderror" value="{{ old('email') }}" required>
        @error('email')
            <p class=" alerta__error">{{ $message }}</p>
        @enderror

        <textarea class="contacto__campo" cols="30" rows="10" placeholder="{{ __('portfolio_text.ph_msg') }}" name="mensaje"
            required>{{ old('mensaje') }}</textarea>
        @error('mensaje')
            <p class=" alerta__error">{{ $message }}</p>
        @enderror

        <input type="hidden" name="email_origin" value="porfolio">

        <input type="hidden" name="recaptcha_response" id="recaptchaResponse">

        <div class="contacto__btn-contenedor">
            <input type="submit" class="contacto__btn" value="{{ __('portfolio_text.btn_send') }}">
        </div>
    </form>

    <p class="contacto__work-together">Want to work together?</p>

    <div class="contacto__iconos">
        <a href="https://github.com/dellpinos" target="_blank">
            <i class="contacto__icono fa-brands fa-github"></i>
        </a>
        <a href="https://www.linkedin.com/in/martin-del-pino-158390293" target="_blank">
            <i class="contacto__icono fa-brands fa-linkedin"></i>
        </a>
        <a href="https://www.youtube.com/@martindelpino1395" target="_blank">
            <i class="contacto__icono fa-brands fa-youtube"></i>
        </a>
    </div>
</div>
