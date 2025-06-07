
import { preloader } from "./home/preloader";
import appScroll from "./home/appScroll";
import contactoVisible from "./home/contacto";
import { logoResponsive, logoFadeUp } from "./home/logo";
import homeParticles from "./home/particles";
import planStyles from "./home/planStyles";
import consultarCaptcha from "./home/reCaptcha";
import services from "./home/services";
import { swiper } from "./home/swiper";

// Preloader
preloader();


document.addEventListener('DOMContentLoaded', () => {

    logoFadeUp();
    consultarCaptcha();
    logoResponsive();
    swiper();
    services();
    contactoVisible();
    appScroll();
    planStyles();
    setTimeout(homeParticles, 300); // pequeño delay

});