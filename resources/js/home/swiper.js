import Swiper from 'swiper';
import { EffectCoverflow, Navigation } from 'swiper/modules';

import { Pagination } from 'swiper/modules'; //


import 'swiper/css';
import 'swiper/css/effect-coverflow';

import 'swiper/css/navigation';
import 'swiper/css/pagination';

// Swiper.use([EffectCoverflow, Navigation]);
Swiper.use([EffectCoverflow, Navigation, Pagination]);

// Cambia el efecto dependiendo del tamaño de la pantalla
let effectType = window.innerWidth <= 480 ? 'slide' : 'coverflow';

export const swiper = () => {
    new Swiper('.swiper', {
        effect: effectType,
        grabCursor: true,
        centeredSlides: true,
        loop: true,
        speed: 700,
        freeMode: false,

        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: false,
        },

        // Navigation arrows
        navigation: {
            nextEl: '.home-swiper-button-next',
            prevEl: '.home-swiper-button-prev',
            hideOnClick: false,

        },

        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            dynamicBullets: true,
            dynamicMainBullets: 3,

        },

        // Responsive
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 10,
                pagination: {
                    enabled: false
                }
            },
            768: {
                slidesPerView: 'auto',
            }
        }

    });
};
