(function () {

    document.addEventListener('DOMContentLoaded', () => {

        iniciarApp();

    });

    function iniciarApp() {

        navegacionFija();
       // scrollNav();

    }

    function navegacionFija () {
        const barra = document.querySelector('.header__nav');
        const skills = document.querySelector('#skills');
        //const body = document.querySelector('body');
    
        window.addEventListener('scroll', function() {

            if( barra.getBoundingClientRect().top < -68 ) {

                barra.classList.add('fijo');

                skills.classList.add('nav-scroll'); 


            } 
            // else {
            //     barra.classList.remove('fijo');
            //     skills.classList.remove('nav-scroll');
            // }

            if( barra.getBoundingClientRect().top < -67 ) {


                barra.classList.add('fijo2');

                skills.classList.add('nav-scroll'); 


            } 

        });
    }
    
    function scrollNav() {
        const enlaces = document.querySelectorAll('.header__nav a');
        enlaces.forEach(enlace => {
            enlace.addEventListener('click', function(e) {
                e.preventDefault();
                
                const seccionScroll = e.target.attributes.href.value;
                const seccion = document.querySelector(seccionScroll);
                seccion.scrollIntoView({ behavior: "smooth"});
            });
        });
    }

    

})();
