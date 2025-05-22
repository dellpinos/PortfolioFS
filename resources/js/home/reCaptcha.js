export default function consultarCaptcha() {

    if (document.querySelector('#recaptchaResponse')) {
        // Consulta el token a Google y lo almacena en el input hidden del formulario de contacto
        const clavePublica = import.meta.env.VITE_CAPTCHA_PUBLIC;

        grecaptcha.ready(function () {
            grecaptcha.execute(clavePublica, { action: 'homepage' }).then(function (token) {

                // Inserta el token en el campo oculto
                document.querySelector('#recaptchaResponse').value = token;
                console.log(document.querySelector('#recaptchaResponse').value)
            });
        });
    }
}