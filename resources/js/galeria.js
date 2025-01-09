import { swiper } from './swiper';
import imgFull from './db_proyectos'; // Proyectos


export default function galeria() {
    // Detectar idioma para cambiar textos
    const currentLang = document.documentElement.lang;

    let imgVisibles = [];

    // Los nuevos proyectos que se hayan agregado en db_proyectos deben agregarse en los filtros que correspondan
    // Filtros
    const imgAll = ['1', '15', '19', '11', '2', '14', '18', '12', '9', '3', '17', '16', '10', '6', '13', '7', '4', '5', '8'];
    // PHP - SASS
    const imgPhp = ['2', '3', '5', '6'];
    // Js - CSS
    const imgJs = ['1', '15', '14', '3', '2', '6', '8'];
    // Laravel
    const imgLaravel = ['1', '15', '7', '10', '9'];
    // React
    const imgReact = ['10', '12', '13', '16'];
    // Python
    const imgPython = ['19', '11', '17', '18'];

    const filtAll = document.querySelector('#img-all');
    const filtPhp = document.querySelector('#img-php');
    const filtLaravel = document.querySelector('#img-laravel');
    const filtJs = document.querySelector('#img-js');
    const filtReact = document.querySelector('#img-react');
    const filtPython = document.querySelector('#img-python');
    const grid = document.querySelector('.projects__grid');

    const filtros = [
        { element: filtAll, filtro: imgAll },
        { element: filtPhp, filtro: imgPhp },
        { element: filtLaravel, filtro: imgLaravel },
        { element: filtJs, filtro: imgJs },
        { element: filtPython, filtro: imgPython },
        { element: filtReact, filtro: imgReact }
    ];

    imgVisibles = imgAll;
    crearGaleria();
    filtroActual();

    filtros.forEach(item => {

        // Listener para cada filtro
        item.element.addEventListener('click', () => {

            limpiarGaleria();
            imgVisibles = item.filtro;
            filtroActual();
            crearGaleria();
        });
    });

    function limpiarGaleria() {
        imgVisibles = [];
        while (grid.firstChild) {
            grid.removeChild(grid.firstChild);
        }
    }

    function filtroActual() {

        filtros.forEach(item => {
            // Compara ambos arrays en forma de strings (busca coincidencia en todos los elementos), si ambos arrays son iguales (los mismos elementos) puede haber un error
            if (JSON.stringify(imgVisibles) === JSON.stringify(item.filtro)) {
                item.element.classList.add('projects__contenedor-filtro--activo');
            } else {
                item.element.classList.remove('projects__contenedor-filtro--activo');
            }
        });
    }

    function crearGaleria() {

        imgVisibles.forEach(element => {

            const project = imgFull[element];

            const imagen = document.createElement('PICTURE');
            imagen.setAttribute("data-aos", "zoom-in");

            const container = document.createElement('DIV');
            container.classList.add('projects__project');

            const overlay = document.createElement('DIV');
            overlay.classList.add('projects__overlay');

            const containerInfo = document.createElement('DIV');
            containerInfo.classList.add('projects__info');

            const titulo = document.createElement('H4');
            titulo.classList.add('projects__info-titulo');
            titulo.textContent = project.heading;

            const tecs = document.createElement('P');
            tecs.classList.add('projects__info-tecs');
            tecs.textContent = project.tecs;

            containerInfo.appendChild(titulo);
            containerInfo.appendChild(tecs);

            const enlace = document.createElement('BUTTON');
            enlace.classList.add('projects__info-btn');

            if (currentLang === 'es') {
                enlace.textContent = "Ver";

            } else {
                enlace.textContent = "View";
            }

            window.addEventListener('resize', () => {

                // Al girar la pantalla del móvil
                // enlace.scrollIntoView({ behavior: 'smooth' });

                if (currentLang === 'es') {
                    enlace.textContent = "Ver";

                } else {
                    enlace.textContent = "View";
                }

            });

            enlace.addEventListener('click', (e) => {

                // // Al girar la pantalla centra el slide clickeado (no funciona correctamente)
                // window.addEventListener('resize', () => {

                //     const slide = enlace.parentNode.parentNode;
                //     const rect = slide.getBoundingClientRect();

                //     // Altura del elemento con respecto al documento
                //     const alturaConRespectoAlDocumento = rect.top + window.scrollY;
                //     const posicionCentrada = alturaConRespectoAlDocumento - window.innerHeight / 2 + rect.height / 2;

                //     window.scrollTo({
                //         top: posicionCentrada,
                //         behavior: 'smooth'
                //     });
                // });

                // Condición que evita pantallas muy pequeñas
                if (window.innerWidth < 480) {

                    let txt;
                    if (currentLang === 'es') {
                        txt = "Gira tu dispositivo";

                    } else {
                        txt = "Rotate your device";
                    }

                    enlace.innerHTML = `
                            <p>${txt}</p>
                            <i class="fa-solid fa-rotate-left"></i>
                        `;
                } else {
                    mostrarImagen(project);
                }
            });

            overlay.appendChild(containerInfo);
            overlay.appendChild(enlace);

            const webP = document.createElement('SOURCE');
            webP.setAttribute('srcset', `img/thumb/${element}_thumb.webp`);
            webP.setAttribute('type', 'image/webp');

            const avif = document.createElement('SOURCE');
            avif.setAttribute('srcset', `img/thumb/${element}_thumb.avif`);
            avif.setAttribute('type', 'image/avif');

            const img = document.createElement('IMG');
            img.classList.add('projects__img');
            img.setAttribute("loading", "lazy");
            img.setAttribute("width", "350");
            img.setAttribute("height", "300");
            img.setAttribute("src", `img/thumb/${element}_thumb.jpg`);
            img.setAttribute("alt", "Imagen Galeria");

            container.appendChild(overlay);
            imagen.appendChild(avif);
            imagen.appendChild(webP);
            imagen.appendChild(img);

            container.appendChild(imagen);

            grid.appendChild(container);

            container.addEventListener('mouseenter', () => {

                img.classList.add('projects__img--oculto');
                overlay.classList.add('projects__overlay--visible');

            });
            container.addEventListener('mouseleave', () => {

                img.classList.remove('projects__img--oculto');
                overlay.classList.remove('projects__overlay--visible');
            });
        });
    }

    function mostrarImagen(array) {

        const overlay = document.querySelector('#projects-overlay-gde');
        overlay.classList.remove('display-none');
        overlay.classList.add('projects__overlay-gde');

        const nav = document.querySelector('.header__contenido-header'); // oculto la navegación
        nav.classList.add('display-none');

        const contenedorSlider = document.querySelector('#projects-contenedor-slider');

        cargarImagenes(array, contenedorSlider, nav, overlay);

        // Añadirlo al html
        const body = document.querySelector('body');
        body.appendChild(overlay);
        body.classList.add('fijar-body');

    }

    function cargarImagenes(array, swiperSecundario, nav, overlay) {

        const imgs = array.imgs;
        const heading = array.heading;
        const tecs = array.tecs;

        for (let i = 0; i < imgs.length; i++) {
            const contenedor = document.createElement('DIV');
            contenedor.classList.add('projects__slide-contenedor', 'swiper-slide');

            const info = document.createElement('DIV');
            info.classList.add('projects__slide-info');

            const titulo = document.createElement('H4');
            titulo.classList.add('projects__slide-heading');
            titulo.textContent = heading;

            const tecnologias = document.createElement('P');
            tecnologias.classList.add('projects__slide-tecs');
            tecnologias.textContent = tecs;

            const textoContenedor = document.createElement('DIV');
            textoContenedor.classList.add('projects__slide-texto');

            const btnContenedor = document.createElement('DIV');
            btnContenedor.classList.add('projects__btn-contenedor');

            const cerrarModal = document.createElement('P');
            cerrarModal.classList.add('projects__btn-cerrar');
            cerrarModal.innerHTML = '<i class="fa-regular fa-circle-xmark"></i>';

            cerrarModal.onclick = function () {

                const body = document.querySelector('body');
                body.classList.remove('fijar-body');

                contenedor.removeChild(imagen);
                contenedor.removeChild(info);

                while (swiperSecundario.firstChild) {
                    swiperSecundario.firstChild.remove();
                }
                nav.classList.remove('display-none');
                overlay.classList.add('display-none');
                overlay.classList.remove('projects__overlay-gde');

                swiper.slideTo(0, 30, false);
            };

            textoContenedor.appendChild(titulo);
            textoContenedor.appendChild(tecnologias);
            info.appendChild(textoContenedor);
            btnContenedor.appendChild(cerrarModal);
            info.appendChild(btnContenedor);

            const imagen = document.createElement('picture');

            imagen.innerHTML = `
                    <source srcset="img/grande/${imgs[i]}.avif" type="image/avif">
                    <source srcset="img/grande/${imgs[i]}.webp" type="image/webp">
                    <img loading="lazy" src="img/grande/${imgs[i]}.jpg" alt="Imagen Galeria">
                    <div class="swiper-lazy-preloader"></div>
                `;

            contenedor.appendChild(imagen);
            contenedor.appendChild(info);

            swiperSecundario.appendChild(contenedor);

            swiper.updateSlides();
        }
    }
}



