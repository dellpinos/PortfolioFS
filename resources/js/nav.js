(function () {

    document.addEventListener('DOMContentLoaded', () => {

        iniciarApp();

    });

    function iniciarApp() {

        navegacionFija();
        scrollNav();
        enlaceActivo();
        barraCarga();

    }

    function navegacionFija() {
        const barra = document.querySelector('.header__contenido-header');
        const skills = document.querySelector('#skills');
        const header = document.querySelector('.header__overlay');

        window.addEventListener('scroll', function () {

            if (header.getBoundingClientRect().bottom < 0) {

                barra.classList.add('fijo');
                skills.classList.add('nav-scroll');

            }
            else {
                barra.classList.remove('fijo');
                skills.classList.remove('nav-scroll');
            }

        });
    }

    function scrollNav() {
        const enlaces = document.querySelectorAll('.scroll-smooth');
        enlaces.forEach(enlace => {
            enlace.addEventListener('click', function (e) {

                e.preventDefault();


                const seccionScroll = e.target.attributes.href.value;
                const seccion = document.querySelector(seccionScroll);
                seccion.scrollIntoView({ behavior: "smooth", block: "start" });
            });
        });
    }

    function enlaceActivo() {

        // seleccionar enlaces
        const enlaces = document.querySelectorAll('.header__nav a');

        enlaces.forEach(enlace => {

            const elemento = enlace.attributes.href.value;
            const seccion = document.querySelector(elemento + "-contenedor");

            window.addEventListener('scroll', function () {

                const rect = seccion.getBoundingClientRect();

                if (rect.top < window.innerHeight && rect.bottom >= 0) {
                    // El elemento está en la vista
                    enlace.classList.add('color-orange');
                } else {
                    // El elemento ya no está en la vista
                    enlace.classList.remove('color-orange');
                }
            });
        });
    }



    function barraCarga() {

        const barra = document.querySelector('#barra-carga');

        window.addEventListener('scroll', actualizarLineaCarga);

        function actualizarLineaCarga() {

            console.log("scroll");
            const alturaPagina = document.documentElement.scrollHeight;
            const alturaVentana = window.innerHeight;
            const posicionUsuario = window.scrollY;
            // Calcula el porcentaje de progreso del usuario
            const porcentajeProgreso = (posicionUsuario / (alturaPagina - alturaVentana)) * 100;

            
    
            // Aplica el porcentaje de progreso como ancho de la línea
            barra.style.width = `${porcentajeProgreso}%`;

        }
    }
})();




