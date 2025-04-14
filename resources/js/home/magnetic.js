
export default function magneticHome() {

    // Puedo agregar la clase "magnetic" a todos los elementos que quiero que tengan este efecto

    const items = document.querySelectorAll('.magnetic');

    items.forEach(item => {
        item.addEventListener('mousemove', e => {
            const rect = item.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;
            item.style.transform = `translate(${x * 0.2}px, ${y * 0.2}px)`;
        });

        item.addEventListener('mouseleave', () => {
            item.style.transform = `translate(0, 0)`;
        });
    });
}