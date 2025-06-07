export default function homeParticles() {
    const getParticleCount = () => {
        if (window.innerWidth < 600) return { prinNum: 20, secNum: 15 };
        return { prinNum: 50, secNum: 30 };
    };

    // Destruir todas las instancias existentes antes de cargar nuevas
    tsParticles.dom().forEach((instance) => instance.destroy());

    if (document.querySelector('#tsparticles')) {
        const { prinNum, secNum } = getParticleCount();

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
                number: { value: prinNum },
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
    if (document.querySelector('#tsparticles2')) {
        const { prinNum, secNum } = getParticleCount();

        tsParticles.load("tsparticles2", {
            fullScreen: { enable: false },
            particles: {
                number: { value: secNum },
                color: { value: "#6ca690" },
                shape: { type: "circle" },
                size: { value: 2 },
                links: {
                    enable: true,
                    color: "#7c7c7c",
                    distance: 150,
                    triangles: {
                        enable: true,
                        color: "#6ca690",
                        opacity: 0.2
                    }
                },
                move: {
                    enable: true,
                    speed: .5
                }
            },
            interactivity: {
                events: {
                    onHover: { enable: true, mode: "repulse" }, // podés cambiar el modo

                },
                modes: {
                    repulse: { distance: 150 },
                    push: { quantity: 1 }
                }
            }
        });
    }
}