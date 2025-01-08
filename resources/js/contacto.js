export default function contactoVisible() {

    const campos = document.querySelectorAll('.contacto__campo');
    const btn = document.querySelector('.contacto__btn');
    const middlePantalla = window.innerHeight / 2;

    campos.forEach((campo) => {
        window.addEventListener('scroll', function () {

            if (campo.getBoundingClientRect().bottom <= (middlePantalla + 400)) {

                campo.classList.add('contacto__campo--activo');

                if (campo.tagName === 'TEXTAREA') {
                    btn.classList.add('contacto__btn--activo');
                } else {
                    btn.classList.remove('contacto__btn--activo');
                }
            }
            else {
                campo.classList.remove('contacto__campo--activo');
            }
        });
    });
}
