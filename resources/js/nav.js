(function () {

    document.addEventListener('DOMContentLoaded', () => {

        iniciarApp();

    });

    function iniciarApp() {

        navegacionFija();
        scrollNav();
        enlaceActivo();

    }

    function navegacionFija () {
        const barra = document.querySelector('.header__nav');
        const skills = document.querySelector('#skills');
        const header = document.querySelector('.header__overlay');
    
        window.addEventListener('scroll', function() {

            if( header.getBoundingClientRect().bottom < 0 ) {

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
            enlace.addEventListener('click', function(e) {

                e.preventDefault();

                
                const seccionScroll = e.target.attributes.href.value;
                const seccion = document.querySelector(seccionScroll);
                seccion.scrollIntoView({ behavior: "smooth", block: "start"});
            });
        });
    }

    function enlaceActivo() {

        // seleccionar enlaces
        const enlaces = document.querySelectorAll('.header__nav a');

        enlaces.forEach(enlace => {

            const elemento = enlace.attributes.href.value;

            const seccion = document.querySelector(elemento);


            window.addEventListener('scroll', function() {

            const rect = seccion.getBoundingClientRect();
  
            if (rect.top < window.innerHeight && rect.bottom >= 0) {
              // El elemento está en la vista
              enlace.classList.add('color-orange');
            } else {
              // El elemento ya no está en la vista
              enlace.classList.remove('color-orange');
            }
        });

            


            // window.addEventListener('scroll', function() {

            //     if( seccion.getBoundingClientRect().top < 0  && seccion.getBoundingClientRect().bottom < 0) {
    

            //         enlace.classList.add('color-orange');
    
            //     } 
            //     else {
            //         enlace.classList.remove('color-orange');
            //     }
    
            // });




        });



        // seleccionar elementos / headings


    }

    

})();
