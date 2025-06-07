
// import './porfolio/devProjects'; -- Deprecated
// import './porfolio/mainProject'; -- Deprecated

import aosInstance from './porfolio/aos';
import darkMode from './porfolio/darkMode';
import contactoVisible from './porfolio/contacto';
import galeria from './porfolio/galeria';
import { consultarCaptcha, iniciarApp } from './porfolio/nav';
import play from './porfolio/play';
// import { swiper, swiperProjects } from './porfolio/swiper';
import newDevProjects from './porfolio/newDevProjects';
import scrollEvents from './porfolio/scrollEvents';


// Preloader
window.addEventListener('load', () => {
    const preloader = document.getElementById('preloader-portfolio');
    preloader.style.opacity = '0';
    preloader.style.pointerEvents = 'none';

    setTimeout(() => {
        preloader.style.display = 'none';
    }, 500);
});

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
