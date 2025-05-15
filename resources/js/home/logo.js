export const logoFadeUp = () => {

    // Dispara las animaciones cuando los elementos son visibles por primera vez
    const logos = document.querySelectorAll('.logo__contenedor');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {

            if (entry.isIntersecting) {
                entry.target.classList.add('logo__visible');

                const bordeInterno = entry.target.querySelector('.logo__borde-rotacion-interna');
                if (bordeInterno) {
                    bordeInterno.classList.add('logo__visible');
                    bordeInterno.offsetHeight;
                    bordeInterno.style.animationPlayState = 'running';
                }
                const circuloCentral = entry.target.querySelector('.logo__circulo-central');
                if (circuloCentral) {
                    circuloCentral.classList.add('logo__visible');
                    circuloCentral.offsetHeight;
                    circuloCentral.style.animationPlayState = 'running';
                }
                const lineasCentro = entry.target.querySelector('.logo__grid-lineas');
                const lineas = lineasCentro.children;

                for (const item of lineas) {

                    item.classList.add('logo__visible');
                    item.offsetHeight;
                    item.style.animationPlayState = 'running';
                }

                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1
    });

    logos.forEach(logo => observer.observe(logo));
}

export const logoResponsive = () => {

    // Cambiar tamaño del logo en pantallas pequeñas
    const logo = document.querySelector('#home-logo-sec');
    const bgLogo = document.querySelector('#home-logo-bg-services');

    changeSize();

    window.addEventListener('resize', function () {
        changeSize();
    });

    function changeSize() {

        if (window.innerWidth <= 768) {
            logo?.style.setProperty('--factor', '0.5');
            bgLogo?.style.setProperty('--factor', '1.5');

        } else {
            logo?.style.setProperty('--factor', '1');
            bgLogo?.style.setProperty('--factor', '2');
        }
    }

}