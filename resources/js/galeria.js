(function () {

    document.addEventListener('DOMContentLoaded', () => {

        let imgVisibles = [];

        const imgAll = ['1', '2', '3', '4', '5', '6', '7', '8', '9'];

        const imgJs = ['1', '2', '5'];
        const imgLaravel = ['3', '6', '1'];
        const imgPhp = ['4', '7', '8', '9'];

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

            if(JSON.stringify(imgVisibles) === JSON.stringify(imgAll)) {

                filtAll.classList.add('projects__filtros--activo');
                filtPhp.classList.remove('projects__filtros--activo');
                filtLaravel.classList.remove('projects__filtros--activo');
                filtJs.classList.remove('projects__filtros--activo');

            } else if(JSON.stringify(imgVisibles) === JSON.stringify(imgPhp)) {

                filtPhp.classList.add('projects__filtros--activo');
                filtAll.classList.remove('projects__filtros--activo');
                filtLaravel.classList.remove('projects__filtros--activo');
                filtJs.classList.remove('projects__filtros--activo');

            } else if(JSON.stringify(imgVisibles) === JSON.stringify(imgLaravel)) {

                filtLaravel.classList.add('projects__filtros--activo');
                filtPhp.classList.remove('projects__filtros--activo');
                filtAll.classList.remove('projects__filtros--activo');
                filtJs.classList.remove('projects__filtros--activo');

            } else if(JSON.stringify(imgVisibles) === JSON.stringify(imgJs)) {

                filtJs.classList.add('projects__filtros--activo');
                filtLaravel.classList.remove('projects__filtros--activo');
                filtPhp.classList.remove('projects__filtros--activo');
                filtAll.classList.remove('projects__filtros--activo');

            }
        }

        function crearGaleria() {

            imgVisibles.forEach(element => {
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
                titulo.textContent = "Bienes Raices"; // <<<<< 

                const tecs = document.createElement('P');
                tecs.classList.add('projects__info-tecs');
                tecs.textContent = "PHP / Js"; // <<<<<<<

                containerInfo.appendChild(titulo);
                containerInfo.appendChild(tecs);

                const enlace = document.createElement('BUTTON');
                enlace.classList.add('projects__info-btn'); /// <<<<<
                enlace.textContent = "Ver";

                overlay.appendChild(containerInfo);

                overlay.appendChild(enlace); //// <<<<<<

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


                });
                imagen.addEventListener('mouseleave', () => {

                    img.classList.remove('projects__img--oculto');
                    overlay.classList.remove('projects__overlay--visible');
                });


            });
        }


    });

})();