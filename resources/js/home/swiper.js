import Swiper from 'swiper';
import { EffectCoverflow, Navigation } from 'swiper/modules';

import 'swiper/css';
import 'swiper/css/effect-coverflow';

import 'swiper/css/navigation';

Swiper.use([EffectCoverflow, Navigation]);

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

        // Responsive
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
            768: {
                slidesPerView: 'auto',
            }
        }

        

    });
};








// const opciones = {

//     slidesPerView: 1,
//     spaceBetween: 5,
//     freeMode: false,
//     loop: false,
//     watchOverflow: true,
//     speed: 800,
//     grabCursor: true,

//     keyboard: {
//         enabled: false,
//         onlyInViewport: false,
//     },

//     modules: [Navigation, Pagination],
//     navigation: {
//         nextEl: '.swiper-button-next',
//         prevEl: '.swiper-button-prev',
//         hideOnClick: false,

//     },
//     breakpoints: {

//         // 320: {
//         //   slidesPerView: 2,
//         //   spaceBetween: 20
//         // },

//         480: {
//             slidesPerView: 1,
//             spaceBetween: 5
//         },

//         // 640: {
//         //   slidesPerView: 4,
//         //   spaceBetween: 40
//         // }
//     }
// }

// const opcionesProjects = {

//     initialSlide: 1,
//     grabCursor: true,
//     freeMode: false,
//     loop: false,


// }



// export const swiper = new Swiper('.swiper', opciones);

// export const swiperProjects = new Swiper('.swiperProjects', opcionesProjects);