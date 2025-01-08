import { barraCarga } from "./nav";
import { opacityScroll } from "./newDevProjects";

// Código de barra de navegación y opacidad de "Main Projects" (ambos reaccionan al scroll)
export default function scrollEvents() {

    // Esta función evita que el evento scroll ejecute funciones innecesariamente rápido
    const debounce = (func, delay) => {
        let timer;
        return (...args) => {
            clearTimeout(timer);
            timer = setTimeout(() => func(...args), delay);
        };
    };

    const delayFunc = 10; // milisegundos

    const debouncedBarraCarga = debounce(barraCarga, delayFunc);
    const debouncedOpacityScroll = debounce(opacityScroll, delayFunc);

    window.addEventListener('scroll', () => {
        debouncedBarraCarga();
        debouncedOpacityScroll();
    });

}