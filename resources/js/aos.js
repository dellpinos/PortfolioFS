import AOS from 'aos';
import 'aos/dist/aos.css';

export default function aosInstance() {
    const anchoPantalla = window.innerWidth;

    // En pantalas pequeñas y móvil horizontal reemplaza los fade para evitar el desplzamiento horizontal
    if(anchoPantalla <= 900) {

      const fades = document.querySelectorAll('[data-aos="fade-right"], [data-aos="fade-left"]');

      fades.forEach( element => {
  
        // element.setAttribute('data-aos', 'flip-up');
        // element.setAttribute('data-aos-offset', 20);

        element.removeAttribute('data-aos');
        element.removeAttribute('data-offset');
  
      });

    }

    let config = {
              // Global settings:
              disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
              startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
              initClassName: 'aos-init', // class applied after initialization
              animatedClassName: 'aos-animate', // class applied on animation
              useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
              disableMutationObserver: false, // disables automatic mutations' detections (advanced)
              debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
              throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
              // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
              offset: 200, // offset (in px) from the original trigger point
              delay: 200, // values from 0 to 3000, with step 50ms
              duration: 600, // values from 0 to 3000, with step 50ms
              easing: 'ease', // default easing for AOS animations
              once: false, // whether animation should happen only once - while scrolling down
              mirror: false, // whether elements should animate out while scrolling past them
              anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation
    };

    AOS.init(config);
}