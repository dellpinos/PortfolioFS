
export default function newDevProjects() {
    
    // Videos dinámicos

    // TicketAdmin
    if (document.querySelector('#tour-card-ticket')) {
        const playIcon = document.querySelector('#tour-play-icon-ticket');
        const tourCard = document.querySelector('#tour-card-ticket');

        playIcon.addEventListener('click', () => {

            // Enlaces a video en Youtube
            if (window.innerWidth > 770) {

                tourCard.innerHTML = `<iframe width="800" height="450" class="tour__card-ticket" src="https://www.youtube.com/embed/_OAyDRs8OGw" title="Recorrido rápido por la aplicación TicketAdmin" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>`;
            } else {
                window.open('https://www.youtube.com/embed/_OAyDRs8OGw', '_blank');
            }

        });
    }
    // TusListas
    if (document.querySelector('#tour-card-tuslistas')) {
        const playIcon = document.querySelector('#tour-play-icon-tuslistas');
        const tourCard = document.querySelector('#tour-card-tuslistas');

        playIcon.addEventListener('click', () => {

            // Enlaces a video en Youtube
            if (window.innerWidth > 770) {

                tourCard.innerHTML = `<iframe width="800" height="450" class="tour__card" src="https://www.youtube.com/embed/x39g00ch7qI" title="Recorrido rápido por la aplicación TusListas" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>`;
            } else {
                window.open('https://www.youtube.com/embed/x39g00ch7qI', '_blank');
            }

        });
    }
    // StuffScripts
    if (document.querySelector('#tour-card-stuff')) {
        const playIcon = document.querySelector('#tour-play-icon-stuff');
        const tourCard = document.querySelector('#tour-card-stuff');

        playIcon.addEventListener('click', () => {

            // Enlaces a video en Youtube
            if (window.innerWidth > 770) {

                tourCard.innerHTML = `<iframe width="800" height="450" class="tour__card-stuff" src="https://www.youtube.com/embed/jWi1nI5yUKA" title="Recorrido rápido por la aplicación Stuff & Scripts" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>`;
            } else {
                window.open('https://www.youtube.com/embed/jWi1nI5yUKA', '_blank');
            }

        });
    }

    // BakeryStore
    if (document.querySelector('#tour-card-stuff')) {
        const playIcon = document.querySelector('#tour-play-icon-store');
        const tourCard = document.querySelector('#tour-card-store');

        playIcon.addEventListener('click', () => {

            // Enlaces a video en Youtube
            if (window.innerWidth > 770) {

                tourCard.innerHTML = `<iframe width="800" height="450" class="tour__card-ticket" src="https://www.youtube.com/embed/eBjGSO5Dx-A" title="Recorrido rápido por la aplicación Stuff & Scripts" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>`;
            } else {
                window.open('https://www.youtube.com/embed/eBjGSO5Dx-A', '_blank');
            }

        });
    }
}

// Opacity de los proyectos reaccionando al scroll
export const opacityScroll = () => {

    const elements = document.querySelectorAll('.new-dev-projects__contenedor-prin');
    
    const windowHeight = window.innerHeight;
    const centerOffset = windowHeight * 0.2; // Ajusta este valor para centrar más el efecto

    elements.forEach(element => {
        const rect = element.getBoundingClientRect(); // Posición relativa al viewport

        // Rango visible modificado
        const startFade = windowHeight * 0.5 - centerOffset; // Punto donde empieza a aparecer
        const endFade = windowHeight * 0.5 + centerOffset;   // Punto donde empieza a desaparecer

        let opacity = 0;

        if (rect.bottom > startFade && rect.top < endFade) {
            // Dentro del rango central, calcula la opacidad proporcional
            if (rect.top >= startFade && rect.bottom <= endFade) {
                opacity = 1; // Totalmente visible si está completamente dentro del rango
            } else if (rect.top < startFade) {
                opacity = (rect.bottom - startFade) / (endFade - startFade);
            } else if (rect.bottom > endFade) {
                opacity = (endFade - rect.top) / (endFade - startFade);
            }
        }

        // Asegura que la opacidad esté entre 0 y 1
        element.style.opacity = Math.max(0, Math.min(1, opacity));

    });
};
