{{-- <div class="home-contacto__contenedor"> --}}

    <div class="home-contacto__principal">

        <div class="home-contacto__text">
            <h2>Agenda una Consulta</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, ab dignissimos hic ullam delectus
                quisquam neque.</p>
        </div>

        <form action="/" method="POST" class="home-contacto__formulario-contenedor">
            @csrf
            <input type="text" placeholder="{{ __('text.ph_name') }}" name="name"
                class="home-contacto__campo @error('name') borde__error @enderror" value="{{ old('name') }}" required>
            @error('name')
                <p class=" alerta__error">{{ $message }}</p>
            @enderror

            <input type="text" placeholder="{{ __('text.ph_email') }}" name="email"
                class="home-contacto__campo @error('email') borde__error @enderror" value="{{ old('email') }}"
                required>
            @error('email')
                <p class=" alerta__error">{{ $message }}</p>
            @enderror

            <textarea class="home-contacto__campo" cols="30" rows="10" placeholder="{{ __('text.ph_msg') }}"
                name="mensaje" required>{{ old('mensaje') }}</textarea>
            @error('mensaje')
                <p class=" alerta__error">{{ $message }}</p>
            @enderror

            <input type="hidden" name="recaptcha_response" id="recaptchaResponse">

            <div class="home-contacto__btn-contenedor">
                <input type="submit" class="home-contacto__btn" value="{{ __('text.btn_send') }}">
            </div>
        </form>
    </div>
{{-- </div> --}}
