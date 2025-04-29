
export default function appScroll() {

    const positionY = '1500';
    const positionYMobile = '900';
    const header = document.querySelector('.home-header');
    let lastScroll = window.scrollY;

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
        if( window.innerWidth <= 768 && currentScroll <= positionYMobile ) {
            // Si el usuario baja después de los 1500px
            header.classList.remove('home-header__visible');
            header.classList.add('home-header__hidden');
        }

        lastScroll = currentScroll;
    });
}