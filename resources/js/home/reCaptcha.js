export default function consultarCaptcha() {

    console.log('Existe 0')
    if (document.querySelector('#recaptchaResponse')) {
        console.log('El campo reCaptcha existe - Js reCaptcha')
        // Consulta el token a Google y lo almacena en el input hidden del formulario de contacto
        const clavePublica = import.meta.env.VITE_CAPTCHA_PUBLIC;

        console.log('clave pública - Js reCaptcha', clavePublica)

        grecaptcha.ready(function () {
            grecaptcha.execute(clavePublica, { action: 'homepage' }).then(function (token) {
                console.log('1er intento')
                // Inserta el token en el campo oculto
                document.querySelector('#recaptchaResponse').value = token;
                console.log(document.querySelector('#recaptchaResponse').value)
            });
        });


        let counter = 0;
        const maxCycles = 6;

        const intervalId = setInterval(() => {
            console.log(`Otros intentos, Ciclo: ${counter + 1}`);
            counter++;

            grecaptcha.ready(function () {
                grecaptcha.execute(clavePublica, { action: 'homepage' }).then(function (token) {
                    // Inserta el token en el campo oculto
                    document.querySelector('#recaptchaResponse').value = token;
                    console.log(document.querySelector('#recaptchaResponse').value)
                });
            });



            if (counter >= maxCycles) {
                clearInterval(intervalId);
                console.log('Intervalo detenido.');
            }
        }, 1000);


    }
}