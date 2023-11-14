import Swiper from 'swiper';
import { Navigation, Pagination } from 'swiper/modules';

import 'swiper/css/bundle';
import 'swiper/css/navigation';

const opciones = {
    
    slidesPerView: 1,
    spaceBetween: 500,
    freeMode: false,
    loop: false,
    watchOverflow: true,
    speed: 800,

    keyboard: {
        enabled: false,
        onlyInViewport: false,
    },

    modules: [Navigation, Pagination],
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
        hideOnClick: false,
        
    }
}

const swiper = new Swiper('.swiper', opciones);




swiper.on('click', function () {
//    swiper.init();
});

export default swiper;


