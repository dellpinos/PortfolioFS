
import appScroll from "./home/appScroll";
import contactoVisible from "./home/contacto";
import logoScript from "./home/logoScript";
import magneticHome from "./home/magnetic";
// import homeMarquee from "./home/marquee";
import homeParticles from "./home/particles";
import services from "./home/services";
import { swiper } from "./home/swiper";

document.addEventListener('DOMContentLoaded', () => {

    magneticHome();
    homeParticles();
    swiper();
    // homeMarquee();
    services();
    logoScript();
    contactoVisible();
    
    appScroll();
});