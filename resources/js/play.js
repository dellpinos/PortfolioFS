(function () {

    document.addEventListener('DOMContentLoaded', () => {


        let firstSelect = '';
        let secondSelect = '';
        let flag = 0;




        // Juego memoria

        const cuadros = document.querySelectorAll('.play__icono');

        cuadros.forEach(cuadro => {

            cuadro.addEventListener('click', (e) => {

                // El cuadro se gira con una animacion
                
                // Se hace visible el icono

                // Evalua a que flag para asignar la selección

                // Busca coincidencia

                // Mantener los coincidente sa la vista, de lo contrario reiniciar esos cuadros

                // Evaluar si el jugador ha ganado

                console.log(e.target);

            });

        });

    });

})();