
// import './porfolio/devProjects'; -- Deprecated
// import './porfolio/mainProject'; -- Deprecated

import aosInstance from './porfolio/aos';
import darkMode from './porfolio/darkMode';
import contactoVisible from './porfolio/contacto';
import galeria from './porfolio/galeria';
import { consultarCaptcha, iniciarApp } from './porfolio/nav';
import play from './porfolio/play';
import { swiper, swiperProjects } from './porfolio/swiper';
import newDevProjects from './porfolio/newDevProjects';
import scrollEvents from './porfolio/scrollEvents';


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
