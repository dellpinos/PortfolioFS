import swiper from './swiper';


(function () {

    document.addEventListener('DOMContentLoaded', () => {

        let imgVisibles = [];

        // Informacion de cada Proyecto
        const imgFull = {
            '0': {
                'imgs': ['0', '1', '2', '3'],
                'heading': "Bienes Raices",
                'tecs': "PHP / Js"
            },
            '1': {
                'imgs': ['3', '4', '5'],
                'heading': "Blog Cafe",
                'tecs': "PHP / Js"
            },
            '2': {
                'imgs': ['6', '7', '8'],
                'heading': "Blog Cafe",
                'tecs': "PHP / Js"
            },
            '3': {
                'imgs': ['9', '10', '11', '12', '13'],
                'heading': "Blog Cafe",
                'tecs': "PHP / Js"
            },
            '4': {
                'imgs': ['14', '15', '16'],
                'heading': "Otro Nombre 2",
                'tecs': "PHP / Js"
            },
            '5': {
                'imgs': ['17', '18', '19'],
                'heading': "Otro Nombre 3",
                'tecs': "PHP"
            },
            '6': {
                'imgs': ['20', '21', '22'],
                'heading': "DevStagram",
                'tecs': "Laravel"
            },
            '7': {
                'imgs': ['23', '24', '25', '26'],
                'heading': "Blog Cafe",
                'tecs': "PHP / Js"
            },
            '8': {
                'imgs': ['27', '28', '29'],
                'heading': "Blog Cafe 14",
                'tecs': "PHP / Js / SASS"
            },

        }

        const imgAll = ['0', '1', '2', '3', '4', '5', '6', '7', '8'];

        // Filtros
        const imgJs = ['0', '1', '2', '5'];
        const imgLaravel = ['3', '6', '1'];
        const imgPhp = ['4', '7', '8'];

        const filtAll = document.querySelector('#img-all');
        const filtPhp = document.querySelector('#img-php');
        const filtLaravel = document.querySelector('#img-laravel');
        const filtJs = document.querySelector('#img-js');
        const grid = document.querySelector('.projects__grid');

        imgVisibles = imgAll;
        crearGaleria();
        filtroActual();

        filtAll.addEventListener('click', () => {

            limpiarGaleria();
            imgVisibles = imgAll;
            filtroActual();
            crearGaleria();
        });
        filtPhp.addEventListener('click', () => {

            limpiarGaleria();
            imgVisibles = imgPhp;
            filtroActual();
            crearGaleria();
        });
        filtLaravel.addEventListener('click', () => {

            limpiarGaleria();
            imgVisibles = imgLaravel;
            filtroActual();
            crearGaleria();
        });
        filtJs.addEventListener('click', () => {

            limpiarGaleria();
            imgVisibles = imgJs;
            filtroActual();
            crearGaleria();
        });

        function limpiarGaleria() {
            imgVisibles = [];
            while (grid.firstChild) {
                grid.removeChild(grid.firstChild);
            }
        }

        function filtroActual() {

            if (JSON.stringify(imgVisibles) === JSON.stringify(imgAll)) {

                filtAll.classList.add('projects__filtros--activo');
                filtPhp.classList.remove('projects__filtros--activo');
                filtLaravel.classList.remove('projects__filtros--activo');
                filtJs.classList.remove('projects__filtros--activo');

            } else if (JSON.stringify(imgVisibles) === JSON.stringify(imgPhp)) {

                filtPhp.classList.add('projects__filtros--activo');
                filtAll.classList.remove('projects__filtros--activo');
                filtLaravel.classList.remove('projects__filtros--activo');
                filtJs.classList.remove('projects__filtros--activo');

            } else if (JSON.stringify(imgVisibles) === JSON.stringify(imgLaravel)) {

                filtLaravel.classList.add('projects__filtros--activo');
                filtPhp.classList.remove('projects__filtros--activo');
                filtAll.classList.remove('projects__filtros--activo');
                filtJs.classList.remove('projects__filtros--activo');

            } else if (JSON.stringify(imgVisibles) === JSON.stringify(imgJs)) {

                filtJs.classList.add('projects__filtros--activo');
                filtLaravel.classList.remove('projects__filtros--activo');
                filtPhp.classList.remove('projects__filtros--activo');
                filtAll.classList.remove('projects__filtros--activo');

            }
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
                enlace.textContent = "Ver";

                enlace.addEventListener('click', (e) => {

                    mostrarImagen(project);
                });


                overlay.appendChild(containerInfo);
                overlay.appendChild(enlace);

                const img = document.createElement('IMG');
                img.classList.add('projects__img');
                img.setAttribute("loading", "lazy");
                img.setAttribute("width", "400");
                img.setAttribute("height", "350");
                img.setAttribute("src", `img/thumb/${element}_thumb.png`);
                img.setAttribute("alt", "Imagen Galeria");

                container.appendChild(overlay);
                container.appendChild(img);
                imagen.appendChild(container);
                grid.appendChild(imagen);

                imagen.addEventListener('mouseenter', () => {

                    img.classList.add('projects__img--oculto');
                    overlay.classList.add('projects__overlay--visible');

                    // imagen.onclick = function () {
                    //     mostrarImagen(element);
                    // }
                    // // console.log(img, element);


                });
                imagen.addEventListener('mouseleave', () => {

                    img.classList.remove('projects__img--oculto');
                    overlay.classList.remove('projects__overlay--visible');
                });


            });
        }

        ///////

        function mostrarImagen(array) {

            const overlay = document.querySelector('#projects-overlay-gde');
            overlay.classList.remove('display-none');
            overlay.classList.add('projects__overlay-gde');

            const nav = document.querySelector('.header__contenido-header'); // oculto la navegación
            nav.classList.add('display-none');

            const contenedorSlider = document.querySelector('#projects-contenedor-slider');

            cargarImagenes(array, contenedorSlider, nav, overlay);

            // Boton para cerrar Ventana Modal

            // const cerrarModal = document.querySelector('#projects-btn-modal');

            // const cerrarModal = document.createElement('P');
            // cerrarModal.classList.add('projects__btn-cerrar');


            // cerrarModal.onclick = function () {
            //     const body = document.querySelector('body');
            //     body.classList.remove('fijar-body');

            //     while (contenedorSlider.firstChild) {
            //         contenedorSlider.firstChild.remove();
            //     }
            //     nav.classList.remove('display-none');
            //     overlay.classList.add('display-none');
            //     overlay.classList.remove('projects__overlay-gde');
            // };

            // Añadirlo al html
            const body = document.querySelector('body');
            body.appendChild(overlay);
            body.classList.add('fijar-body');

            swiper.update();

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

                const btnContenedor = document.createElement('DIV');
                btnContenedor.classList.add('projects__btn-contenedor');

                const cerrarModal = document.createElement('P');
                cerrarModal.classList.add('projects__btn-cerrar');
                cerrarModal.innerHTML = '<i class="fa-regular fa-rectangle-xmark"></i>';

                cerrarModal.onclick = function () {

                    console.log("eliminar");
                    const body = document.querySelector('body');
                    body.classList.remove('fijar-body');

                    while (swiperSecundario.firstChild) {
                        swiperSecundario.firstChild.remove();
                    }
                    nav.classList.remove('display-none');
                    overlay.classList.add('display-none');
                    overlay.classList.remove('projects__overlay-gde');
                };

                info.appendChild(titulo);
                info.appendChild(tecnologias);
                btnContenedor.appendChild(cerrarModal);
                info.appendChild(btnContenedor);


                const imagen = document.createElement('picture');
                // imagen.classList.add('swiper-slide');
                imagen.innerHTML = `
                    <source srcset="img/grande/${imgs[i]}.avif" type="image/avif">
                    <source srcset="img/grande/${imgs[i]}.webp" type="image/webp">
                    <img loading="lazy" height="500" src="img/grande/${imgs[i]}.jpg" alt="Imagen Galeria">
                `;

                contenedor.appendChild(imagen);
                contenedor.appendChild(info);

                swiperSecundario.appendChild(contenedor);


            }
            //console.log(info);

        }


        ////////


        // function mostrarImagen(array) {

        //     const swiperPrincipal = document.createElement('DIV');
        //     swiperPrincipal.classList.add('swiper', 'slider');

        //     const swiperSecundario = document.createElement('DIV');
        //     swiperSecundario.classList.add('swiper-wrapper'); // Contiene las imagenes, un array de pictures

        //     const paginacion = document.createElement('DIV');
        //     paginacion.classList.add('swiper-paginacion');

        //     const btnPrev = document.createElement('DIV');
        //     btnPrev.classList.add('swiper-button-prev');

        //     const btnNext = document.createElement('DIV');
        //     btnNext.classList.add('swiper-button-next');

        //     swiperPrincipal.appendChild(swiperSecundario);
        //     swiperPrincipal.appendChild(paginacion);
        //     swiperPrincipal.appendChild(btnPrev);
        //     swiperPrincipal.appendChild(btnNext);

        //     cargarImagenes(array, swiperSecundario);

        //     // Crea overlay con la imagen
        //     const overlay = document.createElement('DIV');
        //     overlay.appendChild(swiperPrincipal);
        //     overlay.classList.add('projects__overlay-gde');
        //     overlay.onclick = function () {
        //         // const body = document.querySelector('body');
        //         // body.classList.remove('fijar-body');
        //         // overlay.remove();
        //     }

        //     // Boton para cerrar Ventana Modal
        //     const cerrarModal = document.createElement('P');
        //     cerrarModal.textContent = 'X';
        //     cerrarModal.classList.add('btn-cerrar');
        //     cerrarModal.onclick = function () {
        //         const body = document.querySelector('body');
        //         body.classList.remove('fijar-body');
        //         overlay.remove();
        //     };
        //     overlay.appendChild(cerrarModal);

        //     // Añadirlo al html
        //     const body = document.querySelector('body');
        //     body.appendChild(overlay);
        //     body.classList.add('fijar-body');


        // }



    });
})();
