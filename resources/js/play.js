(function () {

    document.addEventListener('DOMContentLoaded', () => {


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

                

                if(!flag) {
                    firstSelect = e.target;

                    flag = 1;
                } else {

                    secondSelect = e.target;

                    console.log(firstSelect.classList[1] + "<<1 ");
                    console.log(secondSelect.classList[1] + "<<2 ");

                    if(firstSelect.classList[1] === secondSelect.classList[1]) {

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