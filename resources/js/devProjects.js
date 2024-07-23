import { swiperProjects } from './swiper';

(function () {

    document.addEventListener('DOMContentLoaded', () => {

        if (document.querySelector('#tour-card')) {
            const playIcon = document.querySelector('#tour-play-icon');
            const tourCard = document.querySelector('#tour-card');

            playIcon.addEventListener('click', () => {

                // Enlaces a video en Youtube
                if(window.innerWidth > 770) {
                    
                    tourCard.innerHTML = `<iframe width="800" height="450" class="tour__card" src="https://www.youtube.com/embed/UH6vv0EN7Bw" title="Recorrido rápido por la aplicación TusListas" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>`;
                } else {
                    window.open('https://www.youtube.com/embed/UH6vv0EN7Bw', '_blank');
                }

            });
        }
    });

})();

