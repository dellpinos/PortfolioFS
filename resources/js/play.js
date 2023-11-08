(function () {

    document.addEventListener('DOMContentLoaded', () => {


        // Map
        const brands = {
            '0': ['fa-brands', 'fa-square-js'],
            '1': ['fa-brands', 'fa-sass'],
            '2': ['fa-brands', 'fa-css3'],
            '3': ['fa-brands', 'fa-html5'],
            '4': ['fa-brands', 'fa-php'],
            '5': ['fa-brands', 'fa-git'],
            '6': ['fa-brands', 'fa-github'],
            '7': ['fa-brands', 'fa-laravel'],
            '8': ['fa-brands', 'fa-galactic-republic'],
            '9': ['fa-brands', 'fa-jedi-order'],
            '10': ['fa-brands', 'fa-firefox-browser'],
            '11': ['fa-brands', 'fa-apple'],
            '12': ['fa-solid', 'fa-code'],
            '13': ['fa-brands', 'fa-docker'],
            '14': ['fa-brands', 'fa-stack-overflow'],
            '15': ['fa-solid', 'fa-database'],
            '16': ['fa-brands', 'fa-steam'],
            '17': ['fa-brands', 'fa-slack']
        };

        // un disparador que genera el array

        // Crear un array aleatorio con estos 18 numeros

        // Un listener cuando el usuario presiona un boton para mostrar el brand correspondiente

        function generarArray() {

            const numeros = [...Array(18).keys()]; // Genera un array de números del 0 al 17
            const arrayAleatorio = [];
          
            while (numeros.length > 0) {
              const primerIndice = Math.floor(Math.random() * numeros.length); // Genera un índice aleatorio para el primer número
              const numero1 = numeros.splice(primerIndice, 1)[0]; // Elimina el primer número del array original
              arrayAleatorio.push(numero1);
          
              if (numeros.length === 0) break; // Si no quedan más números, termina
          
              const segundoIndice = Math.floor(Math.random() * numeros.length); // Genera un índice aleatorio para el segundo número
              const numero2 = numeros.splice(segundoIndice, 1)[0]; // Elimina el segundo número del array original
              arrayAleatorio.push(numero2);
            }
          
            return arrayAleatorio;


        }

        const arrayAleatorio = generarArray();
        console.log(arrayAleatorio);
        /////////



          

        return;









        /////////




        let firstSelect = '';
        let secondSelect = '';
        let flag = 0;
        let arraySelec = [];

        // Un array que guarde los resultados



        // Juego memoria

        const cuadros = document.querySelectorAll('.play__icono');

        cuadros.forEach(cuadro => {

            cuadro.addEventListener('click', (e) => {

                //e.target.classList.add('b-rojo');
                e.target.classList.add('c-azul');



                if (!flag) {
                    firstSelect = e.target;

                    flag = 1;
                } else {

                    secondSelect = e.target;

                    console.log(firstSelect.classList[1] + "<<1 ");
                    console.log(secondSelect.classList[1] + "<<2 ");

                    if (firstSelect.classList[1] === secondSelect.classList[1]) {

                        arraySelec.push(firstSelect);
                        arraySelec.push(secondSelect);


                        console.log('iguales');

                    } else {

                        console.log('no son iguales');

                    }

                    setTimeout(() => {

                        flag = 0;
                        firstSelect.classList.remove('b-rojo');
                        secondSelect.classList.remove('b-rojo');

                        firstSelect.classList.remove('c-azul');
                        secondSelect.classList.remove('c-azul');


                        firstSelect = '';
                        secondSelect = '';
                    }, 500);


                }
                // El cuadro se gira con una animacion

                // Se hace visible el icono

                // Evalua a que flag para asignar la selección

                // Busca coincidencia

                // Mantener los coincidente sa la vista, de lo contrario reiniciar esos cuadros

                // Evaluar si el jugador ha ganado

                prueba();



            });

        });

        function prueba() {

            arraySelec.forEach(elem => {

                elem.classList.add('c-rojo');

                console.log(elem);
            });
        }

    });

})();