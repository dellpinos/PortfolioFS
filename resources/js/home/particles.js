
export default function homeParticles () {
    tsParticles.load("tsparticles", {
        fullScreen: { enable: false },
        particles: {
            color: { value: "#7c7c7c" }, // color de las partículas
            links: {
                enable: true,
                color: "#7c7c7c", // color de las líneas
                distance: 150
            },
            move: { enable: true, speed: 1.5 },
            number: { value: 70 },
            size: { value: 2 }
        },
        interactivity: {
            events: {
                onHover: { enable: true, mode: "grab" }, // podés cambiar el modo
                onClick: { enable: true, mode: "push" } // ej: click genera más partículas
            },
            modes: {
                repulse: { distance: 100 },
                push: { quantity: 2 }
            }
        }
    });
}

