
// import './devProjects'; -- Deprecated
// import './mainProject'; -- Deprecated

import aosInstance from './aos';
import darkMode from './darkMode';
import contactoVisible from './contacto';
import galeria from './galeria';
import { consultarCaptcha, iniciarApp } from './nav';
import play from './play';
import { swiper, swiperProjects } from './swiper';
import newDevProjects from './newDevProjects';
import scrollEvents from './scrollEvents';


document.addEventListener('DOMContentLoaded', () => {

    consultarCaptcha();
    iniciarApp();
    scrollEvents();
    aosInstance();
    darkMode();
    contactoVisible();
    galeria();
    play();
    newDevProjects();

});