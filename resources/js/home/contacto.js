export default function contactoVisible() {

    const campos = document.querySelectorAll('.home-contacto__campo');
    const btn = document.querySelector('.home-contacto__btn');
    const middlePantalla = window.innerHeight / 2;

    campos.forEach((campo) => {
        window.addEventListener('scroll', function () {

            if (campo.getBoundingClientRect().bottom <= (middlePantalla + 400)) {

                campo.classList.add('home-contacto__campo--activo');

                if (campo.tagName === 'TEXTAREA') {
                    btn.classList.add('home-contacto__btn--activo');
                } else {
                    btn.classList.remove('home-contacto__btn--activo');
                }
            }
            else {
                campo.classList.remove('home-contacto__campo--activo');
            }
        });
    });
}
