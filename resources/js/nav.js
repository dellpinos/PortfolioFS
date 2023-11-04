(function () {

    document.addEventListener('DOMContentLoaded', () => {

        iniciarApp();

    });

    function iniciarApp() {

        navegacionFija();
        scrollNav();

    }

    function navegacionFija () {
        const barra = document.querySelector('.header__nav');
        const skills = document.querySelector('#skills');
        const header = document.querySelector('.header__overlay');
        //const body = document.querySelector('body');
    
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

                console.log(e);
                //console.log(enlace);
                e.preventDefault();

                
                const seccionScroll = e.target.attributes.href.value;
                const seccion = document.querySelector(seccionScroll);
                seccion.scrollIntoView({ behavior: "smooth", block: "start"});
            });
        });
    }

    

})();
