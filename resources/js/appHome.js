
import appScroll from "./home/appScroll";
import contactoVisible from "./home/contacto";
import logoResponsive from "./home/logoResponsive";
import homeParticles from "./home/particles";
import planStyles from "./home/planStyles";
import consultarCaptcha from "./home/reCaptcha";
import services from "./home/services";
import { swiper } from "./home/swiper";

// Preloader
window.addEventListener('load', () => {
    const preloader = document.getElementById('preloader');
    preloader.style.opacity = '0';
    preloader.style.pointerEvents = 'none';

    setTimeout(() => {
        preloader.style.display = 'none';
    }, 500);
});


document.addEventListener('DOMContentLoaded', () => {

    consultarCaptcha();
    logoResponsive();
    homeParticles();
    swiper();
    services();
    contactoVisible();
    appScroll();
    planStyles();

});