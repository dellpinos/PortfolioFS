// (function () {

//     document.addEventListener('DOMContentLoaded', () => {

//         iniciarApp();

//     });

//     function iniciarApp() {

//         iconoSalta();
//     }

//     function iconoSalta() {

//         const cards = document.querySelectorAll('.main-projects__card');
        
//         cards.forEach( e => {
            
//             const icono = e.querySelector('.fa-github');

//             e.addEventListener('mouseenter', () => {

//                 setInterval(() => {
//                     icono.classList.add('t-y');

//                     setTimeout(() => {
                        
//                         icono.classList.remove('t-y');
//                     }, 500);
//                 }, 500);


//             });
            
//         });




//     }

// })();