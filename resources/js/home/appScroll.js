
export default function appScroll() {

    const positionY = '1500';
    const positionYMobile = '900';
    const header = document.querySelector('.home-header');
    const isHome = !!document.querySelector('#home-logo-sec');
    const isMobile = window.innerWidth <= 768;
    let lastScroll = window.scrollY;

    // En mobile inicia visible si no es Homepage
    if (isMobile && !isHome) {
        header.classList.add('home-header__visible');
    }

    // Reacciona al scroll
    window.addEventListener('scroll', () => {
        const currentScroll = window.scrollY;

        if (!isMobile) {
            // El usuario está en desktop

            if (currentScroll < lastScroll) {
                // El usuario está subiendo

                if (currentScroll >= positionY) {
                    // El usuario está "debajo" del limite para desktop

                    // Mostrar Header
                    header.classList.remove('home-header__hidden');
                    void header.offsetHeight;
                    header.classList.add('home-header__visible');
                }

            } else {
                // El usuario está bajando

                if (currentScroll >= positionY) {
                    // El usuario está "debajo" del limite para desktop

                    // Ocultar Header
                    header.classList.remove('home-header__visible');
                    header.classList.add('home-header__hidden');
                }
            }

        } else {
            // El usuario está en mobile

            if (currentScroll < lastScroll) {
                // El usuario está subiendo

                if (isHome) {
                    // Está en la homepage

                    if (currentScroll >= positionYMobile) {
                        // El usuario está "debajo" del limite para mobile

                        // Mostrar Header
                        header.classList.remove('home-header__hidden');
                        void header.offsetHeight;
                        header.classList.add('home-header__visible');
                    } else {
                        // El usuario está sobre el límite para mobile

                        // Ocultar Header
                        header.classList.remove('home-header__visible');
                        header.classList.add('home-header__hidden');
                    }

                } else {
                    // No está en la homepage

                    // Mostrar Header
                    header.classList.remove('home-header__hidden');
                    void header.offsetHeight;
                    header.classList.add('home-header__visible');
                }

            } else {
                // El usuario está bajando

                // Ocultar Header
                header.classList.remove('home-header__visible');
                header.classList.add('home-header__hidden');
            }
        }

        // Actualizar "último scroll"
        lastScroll = currentScroll;
    });
}