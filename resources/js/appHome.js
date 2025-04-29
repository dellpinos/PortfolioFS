
import appScroll from "./home/appScroll";
import contactoVisible from "./home/contacto";
import logoResponsive from "./home/logoResponsive";
import logoScript from "./home/logoScript";
import magneticHome from "./home/magnetic";
import homeParticles from "./home/particles";
import services from "./home/services";
import { swiper } from "./home/swiper";

window.addEventListener('load', () => {
    const preloader = document.getElementById('preloader');
    preloader.style.opacity = '0';
    preloader.style.pointerEvents = 'none';

    setTimeout(() => {
        preloader.style.display = 'none';
    }, 500);
});


document.addEventListener('DOMContentLoaded', () => {

    logoResponsive();
    magneticHome();
    homeParticles();
    swiper();
    services();
    logoScript();
    contactoVisible();
    appScroll();

});