export default function logoResponsive() {

    // Cambiar tamaño del logo en pantallas pequeñas
    const logo = document.querySelector('#home-logo-sec');
    const bgLogo = document.querySelector('#home-logo-bg-services');

    changeSize();

    window.addEventListener('resize', function () {
        changeSize();
    });

    function changeSize() {

        if (window.innerWidth <= 768) {
            logo.style.setProperty('--factor', '0.5');
            bgLogo.style.setProperty('--factor', '1.5');

        } else {
            logo.style.setProperty('--factor', '1');
            bgLogo.style.setProperty('--factor', '2.2');
        }
    }

}