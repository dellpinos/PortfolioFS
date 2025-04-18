export default function magneticHome() {
    // Selecciona todos los elementos con la clase "magnetic"
    const items = document.querySelectorAll('.magnetic');

    items.forEach(item => {
        // Establece una transición para un retorno suave
        item.style.transition = 'transform 0.5s ease';  // El tiempo de retorno

        item.addEventListener('mousemove', e => {
            const rect = item.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;
            
            // Aumenta el desplazamiento (puedes ajustar este valor)
            item.style.transform = `translate(${x * 5}px, ${y * 5}px)`;  // Disminuye el factor para seguimiento más largo
        });

        item.addEventListener('mouseleave', () => {
            // Al salir del área, el elemento regresa lentamente a su posición original
            item.style.transform = `translate(0, 0)`;
        });
    });
}
