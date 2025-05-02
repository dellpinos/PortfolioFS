
export default function appScroll() {

    const positionY = '1500';
    const positionYMobile = '900';
    const header = document.querySelector('.home-header');
    const isHome = !!document.querySelector('#home-logo-sec');
    let lastScroll = window.scrollY;

    // En mobile (no homepage) inicia visible
    if (window.innerWidth <= 768 && !isHome) {
        header.classList.add('home-header__visible');
    }

    // Reacciona al scroll
    window.addEventListener('scroll', () => {
        const currentScroll = window.scrollY;

        if (currentScroll < lastScroll && currentScroll >= positionY) {
            // Si el usuario sube después de haber pasado los 1500px
            header.classList.remove('home-header__hidden');
            void header.offsetHeight;
            header.classList.add('home-header__visible');
        } else if (currentScroll >= positionY) {
            // Si el usuario baja después de los 1500px
            header.classList.remove('home-header__visible');
            header.classList.add('home-header__hidden');
        }

        // En mobile 
        if (window.innerWidth <= 768 && currentScroll <= positionYMobile) {
            // Si el usuario baja después de los 1500px
            header.classList.remove('home-header__visible');
            header.classList.add('home-header__hidden');
        }

        // En mobile (no homepage) se muestra siempre que el usuario scrollea hacia arriba
        if (currentScroll < lastScroll && !isHome) {
            header.classList.remove('home-header__hidden');
            void header.offsetHeight;
            header.classList.add('home-header__visible');
        }

        lastScroll = currentScroll;
    });
}