<div class="home-contacto__principal">

    <div class="home-contacto__text">
        <h2>{{ __('home_text.contact_heading') }}</h2>
        <p>{{ __('home_text.contact_desc') }}</p>
    </div>

    <form action="{{ route('contact.send') }}" method="POST" class="home-contacto__formulario-contenedor">
        @csrf
        <input type="text" placeholder="{{ __('portfolio_text.ph_name') }}" name="name"
            class="home-contacto__campo @error('name') borde__error @enderror" value="{{ old('name') }}" required>
        @error('name')
            <p class=" alerta__error">{{ $message }}</p>
        @enderror

        <input type="text" placeholder="{{ __('portfolio_text.ph_email') }}" name="email"
            class="home-contacto__campo @error('email') borde__error @enderror" value="{{ old('email') }}" required>
        @error('email')
            <p class=" alerta__error">{{ $message }}</p>
        @enderror

        <textarea class="home-contacto__campo" cols="30" rows="10" placeholder="{{ __('portfolio_text.ph_msg') }}"
            name="mensaje" required>{{ old('mensaje') }}</textarea>
        @error('mensaje')
            <p class=" alerta__error">{{ $message }}</p>
        @enderror

        <input type="hidden" name="email_origin" value="consultora">
        <input type="hidden" name="recaptcha_response" id="recaptchaResponse">

        <div class="home-contacto__btn-contenedor">
            <input type="submit" class="home-contacto__btn" value="{{ __('portfolio_text.btn_send') }}">
        </div>
    </form>
</div>