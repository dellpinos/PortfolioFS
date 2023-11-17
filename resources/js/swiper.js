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


    // max-width y slides per view y spacebetween

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
          spaceBetween: 500
        },

        // 640: {
        //   slidesPerView: 4,
        //   spaceBetween: 40
        // }
      }
}

const swiper = new Swiper('.swiper', opciones);




swiper.on('click', function () {
//    swiper.init();
});

export default swiper;


