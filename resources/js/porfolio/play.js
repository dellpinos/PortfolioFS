
export default function play() {
    // Detectar idioma para cambiar textos
    const currentLang = document.documentElement.lang;
    // Map
    const brands = {
        '0': ['fa-brands', 'fa-square-js', 'c-ama'],
        '1': ['fa-brands', 'fa-sass', 'c-rosa'],
        '2': ['fa-brands', 'fa-css3', 'c-azul'],
        '3': ['fa-brands', 'fa-html5', 'c-rojo'],
        '4': ['fa-brands', 'fa-php', 'c-azul'],
        '5': ['fa-brands', 'fa-git-alt', 'c-orange'],
        '6': ['fa-brands', 'fa-github', 'c-oscuro'],
        '7': ['fa-brands', 'fa-laravel', 'c-rojo'],
        '8': ['fa-brands', 'fa-node-js', 'c-green'],
        '9': ['fa-brands', 'fa-gulp', 'c-rojo'],
        '10': ['fa-brands', 'fa-xbox', 'c-green'],
        '11': ['fa-brands', 'fa-python', 'c-azul'],
        '12': ['fa-brands', 'fa-react', 'c-cyan'],
        '13': ['fa-brands', 'fa-docker', 'c-azul'],
        '14': ['fa-brands', 'fa-stack-overflow', 'c-orange'],
        '15': ['fa-solid', 'fa-database', 'c-white'],
        '16': ['fa-brands', 'fa-steam', 'c-azul'],
        '17': ['fa-brands', 'fa-slack', 'c-white']
    };

    let firstSelect = '';
    let secondSelect = '';
    let firstElement = '';
    let secondElement = '';
    let firstIndice = '';
    let flag = false; // diferencia primer click del segundo
    let flagTimeout = 0;
    let contadorVictorias = 0;
    let contadorClicks = 0;
    let arraySelec = [];

    let arrayAleatorio = generarArray();
    let cuadros = document.querySelectorAll('.play__icono');
    const grid = document.querySelector('.play__grid');
    const desplegar = document.querySelector('#play-desplegar');

    // clicks maximos por lvl
    const lvl2 = 150;
    const lvl3 = 120;
    const lvl4 = 90;

    // Traducción de textos
    let txt1;
    let txt2;

    if (currentLang === 'es') {
        txt1 = "Restantes ";
        txt2 = "Victorias: "
    } else {
        txt1 = "Remaining ";
        txt2 = "Wins: ";
    }

    desplegar.addEventListener('click', () => {

        grid.classList.toggle('play__grid--activo');

    });

    function gameOver() {

        while (desplegar.firstChild) {
            desplegar.removeChild(desplegar.firstChild);
        }

        cuadros.forEach(cuadro => {
            cuadro.classList.add('play__icono-game-over');
        });

        const gameOver = document.createElement('P');
        gameOver.textContent = "Game Over";
        gameOver.classList.add('play__game-over');

        desplegar.appendChild(gameOver);

        // recargar pagina
        // setTimeout(() => {
        // location.reload();

        // }, 4000);


    }

    function lvlSuperado() {

        // reiniciar todas las variables globales
        firstSelect = '';
        secondSelect = '';
        firstElement = '';
        secondElement = '';
        firstIndice = '';
        flag = 0;
        contadorClicks = 0;
        arraySelec = [];

        // reiniciar estilos
        cuadros.forEach(cuadro => {
            cuadro.classList.remove('play__icono-victoria');
            cuadro.classList.remove('data-check');
            while (cuadro.firstChild) {
                cuadro.removeChild(cuadro.firstChild);

            }
        });

        // crear un nuevo array aleatorio
        arrayAleatorio = generarArray();

    }

    function activarContador() {

        while (desplegar.firstChild) {
            desplegar.removeChild(desplegar.firstChild);
        }

        desplegar.classList.add('play__desplegar--contadores');

        const parrafoVictorias = document.createElement('P');
        parrafoVictorias.classList.add('play__contador');
        parrafoVictorias.textContent = txt2 + contadorVictorias;

        const parrafoClicks = document.createElement('P');
        parrafoClicks.classList.add('play__contador');
        parrafoClicks.id = 'play-contador-clicks'
        if (contadorVictorias === 1) {

            parrafoClicks.textContent = txt1 + contadorClicks + "/" + lvl2;
        } else if (contadorVictorias === 2) {

            parrafoClicks.textContent = txt1 + contadorClicks + "/" + lvl3;
        } else if (contadorVictorias > 2) {

            parrafoClicks.textContent = txt1 + contadorClicks + "/" + lvl4;
        }

        desplegar.appendChild(parrafoVictorias);
        desplegar.appendChild(parrafoClicks);
    }

    // Comprueba las clases de los elementos clickeados, si no se clickea en el icono no hay clase que comparar

    for (let i = 0; i < cuadros.length; i++) {

        cuadros[i].addEventListener('click', (e) => {

            if (!flagTimeout) {

                // contador de clicks
                contadorClicks++;
                if (contadorVictorias > 0) {

                    const parrafoClicks = document.querySelector('#play-contador-clicks');

                    if (contadorVictorias === 1) {

                        parrafoClicks.textContent = txt1 + contadorClicks + "/" + lvl2;
                        if (contadorClicks > lvl2) {
                            gameOver();
                        }
                    } else if (contadorVictorias === 2) {

                        parrafoClicks.textContent = txt1 + contadorClicks + "/" + lvl3;
                        if (contadorClicks > lvl3) {
                            gameOver();
                        }
                    } else if (contadorVictorias > 2) {

                        parrafoClicks.textContent = txt1 + contadorClicks + "/" + lvl4;
                        if (contadorClicks > lvl4) {
                            gameOver();
                        }
                    }
                }

                if (e.target.tagName === "DIV") { // Evita el click en el icono

                    const clases = brands[arrayAleatorio[i]].join(" "); // mapeo los brands con el array aleatorio

                    cuadros[i].innerHTML = `<i class="${clases}"></i>`; // asigna el nuevo icono

                    e.target.classList.add('play__icono-azul');

                    if (!flag) {
                        firstSelect = clases;
                        firstElement = e.target;
                        firstIndice = i;
                        flag = 1;

                    } else if (flag && firstIndice !== i) { // Evita presione el mismo cuadro dos veces

                        secondSelect = clases;
                        secondElement = e.target;

                        if (firstSelect === secondSelect) {

                            // Son iguales

                            firstElement.classList.add('data-check');
                            secondElement.classList.add('data-check');

                            arraySelec.push(firstElement);
                            arraySelec.push(secondElement);


                        } else {

                            // No son iguales

                            setTimeout(() => {

                                while (firstElement.firstChild && !firstElement.classList.contains('data-check')) {
                                    firstElement.firstChild.remove(); // elimina el icono anterior
                                }
                                while (secondElement.firstChild && !secondElement.classList.contains('data-check')) {
                                    secondElement.firstChild.remove(); // elimina el icono anterior
                                }

                            }, 400);
                        }

                        flagTimeout = true;

                        setTimeout(() => {

                            flag = 0;

                            firstElement.classList.remove('play__icono-azul');
                            secondElement.classList.remove('play__icono-azul');

                            firstSelect = '';
                            secondSelect = '';
                            firstElement = '';
                            secondElement = '';

                            flagTimeout = false;
                        }, 500);
                    }

                    coincidencias();
                }
            }

        });
    }


    function generarArray() {
        const numerosDisponibles = [];
        const arrayAleatorio = [];

        // Genera un array con numeros del 0 al 17
        for (let i = 0; i <= 17; i++) {
            numerosDisponibles.push(i, i);
        }

        // Genera un array con 36 numeros utilizando los disponibles (2 de cada uno)
        for (let i = 0; i < 36; i++) {

            const indice = Math.floor(Math.random() * numerosDisponibles.length); // Calcula el indice
            const numeroElegido = numerosDisponibles.splice(indice, 1)[0]; // Extrae el numero del primeer array para evitar que se reutilice
            arrayAleatorio.push(numeroElegido);
        }

        return arrayAleatorio;
    }

    function coincidencias() {

        arraySelec.forEach(elem => {

            elem.classList.remove('play__icono-azul');
            elem.classList.add('play__icono-rojo');

        });

        if (arraySelec.length >= 36) {
            gridCompletado();

        }
    }

    function gridCompletado() {

        let delay = 0;
        // Ganador
        cuadros.forEach(cuadro => {
            cuadro.classList.remove('play__icono-rojo');
        });
        cuadros.forEach((cuadro, i) => {

            setTimeout(() => {
                cuadro.classList.add('play__icono-victoria');
            }, delay);
            delay += 100;

            if (i === cuadros.length - 1) {

                setTimeout(() => {

                    contadorVictorias++;
                    // reinicia variables y estilos
                    lvlSuperado();
                    // eliminar el icono y reemplazarlo por un parrafo o dos que cuenten victorias y clicks
                    activarContador();

                }, delay + 300);

            }
        });
    }
}