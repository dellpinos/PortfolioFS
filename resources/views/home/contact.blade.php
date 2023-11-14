<div id="contacto-contenedor" class="contacto__contenedor">
    <h2 class="contacto__heading" id="contacto" data-aos="fade-right">Contacto</h2>


    <form action="/" method="POST" class="contacto__formulario-contenedor">
        @csrf
        <input type="text" placeholder="Tu nombre" name="name"
            class="contacto__campo @error('name') borde__error @enderror" value="{{ old('name') }}" required">
        @error('name')
            <p class=" alerta__error">{{ $message }}</p>
        @enderror

        <input type="text" placeholder="Tu email" name="email"
            class="contacto__campo @error('email') borde__error @enderror" value="{{ old('email') }}" required>
        @error('email')
            <p class=" alerta__error">{{ $message }}</p>
        @enderror

        <textarea class="contacto__campo" cols="30" rows="10" placeholder="Escribe tu mensaje" name="mensaje"
            required>{{ old('mensaje') }}</textarea>
        @error('mensaje')
            <p class=" alerta__error">{{ $message }}</p>
        @enderror

        <div class="contacto__btn-contenedor">
            <input type="submit" class="contacto__btn" value="Enviar">
        </div>
    </form>


    <p class="contacto__work-together">Want to work together?</p>

    <div class="contacto__iconos">
        <i class="contacto__icono fa-brands fa-github"></i>
        <i class="contacto__icono fa-brands fa-linkedin"></i>
        <i class="contacto__icono fa-solid fa-square-envelope"></i>

    </div>




</div>
