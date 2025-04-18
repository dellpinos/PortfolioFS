
import appScroll from "./home/appScroll";
import magneticHome from "./home/magnetic";
// import homeMarquee from "./home/marquee";
import homeParticles from "./home/particles";
import services from "./home/services";
import { swiper } from "./home/swiper";

document.addEventListener('DOMContentLoaded', () => {

    appScroll();
    magneticHome();
    homeParticles();
    swiper();
    // homeMarquee();
    services();

});