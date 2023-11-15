(function () {

    document.addEventListener('DOMContentLoaded', () => {

        iniciarApp();

    });

    function iniciarApp() {

        navegacionFija();
        navegacionMovil();
        scrollNav();
        enlaceActivo();
        barraCarga();

    }

    function navegacionMovil() {

        const barra = document.querySelector('.header__contenido-header');
        const btnMovil = document.querySelector('.header__nav-menu-movil');
        const nav = document.querySelector('.header__nav');
        const body = document.querySelector('body');





        btnMovil.addEventListener('click', () => {
            // console.log('click');
            btnMovil.classList.toggle('header__nav-menu-movil--activo');

            // scrollea hasta dejar la barra en la parte superior de la pantalla
            if (barra) {
                let rect = barra.getBoundingClientRect();
                let scrollTop = document.documentElement.scrollTop;
                let targetPosition = rect.top + scrollTop;

                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }

            // body.classList.remove('no-scroll');

            // window.addEventListener('scroll', () => {

            //     if(barra.getBoundingClientRect().top === 0) {
    
            //         body.classList.add('no-scroll');
            //     }
            // })




            // - cambio el dns de staging-dellpinos.com (tuslistas) a tuslistas.staging-dellpinos.com
            // - cree el nuevo subdomio
            // cambie los dominios, cuidado con el ssl



            // barra.classList.toggle('header__contenido-header--activo');
            //barra.classList.add('fijo');

        });
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
                    enlace.classList.add('c-orange');
                } else {
                    // El elemento ya no está en la vista
                    enlace.classList.remove('c-orange');
                }
            });
        });
    }



    function barraCarga() {

        const barra = document.querySelector('#barra-carga');

        window.addEventListener('scroll', actualizarLineaCarga);

        function actualizarLineaCarga() {

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




