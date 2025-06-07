export const preloader = () => {
    // Fallback: si demora demasiado la carga
    let preloadTimeout = setTimeout(hidePreloader, 3000);

    window.addEventListener('load', () => {
        clearTimeout(preloadTimeout);
        hidePreloader();
    });

    function hidePreloader() {
        const preloader = document.getElementById('preloader');
        if (!preloader || preloader.style.display === 'none') return; // Ya fue ocultado

        preloader.style.opacity = '0';
        preloader.style.pointerEvents = 'none';

        setTimeout(() => {
            preloader.style.display = 'none';
        }, 500);
    }
}