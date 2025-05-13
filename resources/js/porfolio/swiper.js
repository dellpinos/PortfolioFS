import Swiper from 'swiper';
import { Navigation, Pagination } from 'swiper/modules';

import 'swiper/css/bundle';
import 'swiper/css/navigation';


const opciones = {

    slidesPerView: 1,
    spaceBetween: 5,
    freeMode: false,
    loop: false,
    watchOverflow: true,
    speed: 800,
    grabCursor: true,

    keyboard: {
        enabled: false,
        onlyInViewport: false,
    },

    modules: [Navigation, Pagination],
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
        hideOnClick: false,

    },
    breakpoints: {

        // 320: {
        //   slidesPerView: 2,
        //   spaceBetween: 20
        // },

        480: {
            slidesPerView: 1,
            spaceBetween: 5
        },

        // 640: {
        //   slidesPerView: 4,
        //   spaceBetween: 40
        // }
    }
}

const opcionesProjects = {

    initialSlide: 1,
    grabCursor: true,
    freeMode: false,
    loop: false,

    // creativeEffect: {
    //     slideShadows: false,
    //     prev: {
    //         // shadow: true,
    //         // translate: [0, 0, -400],
    //       },
    //       next: {
    //         // translate: ['100%', 0, 0],
    //       },

    // }
    // allowSlideNext: true

    

    // slidesPerView: 1,
    // spaceBetween: 5,
    // freeMode: false,
    // loop: false,
    // watchOverflow: true,
    // speed: 800,

    // keyboard: {
    //   enabled: false,
    //   onlyInViewport: false,
    // },

    // modules: [Navigation, Pagination],
    // navigation: {
    //   nextEl: '.swiper-button-next',
    //   prevEl: '.swiper-button-prev',
    //   hideOnClick: false,

    // },
    // breakpoints: {

    //   // 320: {
    //   //   slidesPerView: 2,
    //   //   spaceBetween: 20
    //   // },

    //   480: {
    //     slidesPerView: 1,
    //     spaceBetween: 5
    //   },

    //   // 640: {
    //   //   slidesPerView: 4,
    //   //   spaceBetween: 40
    //   // }
}



export const swiper = new Swiper('.swiper', opciones);

export const swiperProjects = new Swiper('.swiperProjects', opcionesProjects);







