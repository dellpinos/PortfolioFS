import { swiperProjects } from './swiper';

(function () {

    document.addEventListener('DOMContentLoaded', () => {

        // TicketAdmin
        if (document.querySelector('#tour-card-ticket')) {
            const playIcon = document.querySelector('#tour-play-icon-ticket');
            const tourCard = document.querySelector('#tour-card-ticket');

            playIcon.addEventListener('click', () => {

                // Enlaces a video en Youtube
                if(window.innerWidth > 770) {
                    
                    tourCard.innerHTML = `<iframe width="800" height="450" class="tour__card-ticket" src="https://www.youtube.com/embed/_OAyDRs8OGw" title="Recorrido rápido por la aplicación TicketAdmin" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>`;
                } else {
                    window.open('https://www.youtube.com/embed/_OAyDRs8OGw', '_blank');
                }

            });
        }
        // TusListas
        if (document.querySelector('#tour-card-tuslistas')) {
            const playIcon = document.querySelector('#tour-play-icon-tuslistas');
            const tourCard = document.querySelector('#tour-card-tuslistas');

            playIcon.addEventListener('click', () => {

                // Enlaces a video en Youtube
                if(window.innerWidth > 770) {
                    
                    tourCard.innerHTML = `<iframe width="800" height="450" class="tour__card" src="https://www.youtube.com/embed/x39g00ch7qI" title="Recorrido rápido por la aplicación TusListas" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>`;
                } else {
                    window.open('https://www.youtube.com/embed/x39g00ch7qI', '_blank');
                }

            });
        }
        // StuffScripts
        if (document.querySelector('#tour-card-stuff')) {
            const playIcon = document.querySelector('#tour-play-icon-stuff');
            const tourCard = document.querySelector('#tour-card-stuff');

            playIcon.addEventListener('click', () => {

                // Enlaces a video en Youtube
                if(window.innerWidth > 770) {
                    
                    tourCard.innerHTML = `<iframe width="800" height="450" class="tour__card-stuff" src="https://www.youtube.com/embed/jWi1nI5yUKA" title="Recorrido rápido por la aplicación Stuff & Scripts" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>`;
                } else {
                    window.open('https://www.youtube.com/embed/jWi1nI5yUKA', '_blank');
                }

            });
        }
    });

})();

