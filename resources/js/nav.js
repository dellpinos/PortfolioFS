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

        // Loop
        animarNav(0);



        btnMovil.addEventListener('click', () => {

            btnMovil.classList.toggle('header__nav-menu-movil--activo');

            // scrollea hasta dejar la barra en la parte superior de la pantalla
            if (barra) {
                let rect = barra.getBoundingClientRect();
                let scrollTop = document.documentElement.scrollTop;
                let targetPosition = rect.top + scrollTop; // posicion actual + distancia al top

                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }

            nav.classList.toggle('header__nav--activo');

            // Cierra la navegacion movil cuando hay scroll
            window.addEventListener('scroll', () => {

                if (header.getBoundingClientRect().bottom < 0 || header.getBoundingClientRect().top < 0) {

                    btnMovil.classList.remove('header__nav-menu-movil--activo');

                    nav.classList.remove('header__nav--activo');

                }
            });
        });
    }
    // Animación texto navegación móvil
    function animarNav(iteracion) {

        const texto = document.querySelector('#header-texto-movil');

        const pasos = [">_", ">M_", ">M ", ">Md_", ">Md ", ">MdP_", ">MdP ", ">MdP", ">MdP_", ">MdP_", ">Md_", ">M_", ">_", "> "];

        if (iteracion < pasos.length) {
            setTimeout(() => {
                texto.textContent = pasos[iteracion];
                animarNav(iteracion + 1);
            }, 400);
        } else {

            setTimeout(() => {
                animarNav(0);
            }, 500);
        }
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
