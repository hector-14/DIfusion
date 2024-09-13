document.addEventListener('DOMContentLoaded', function () {
    const cartasContainer = document.querySelector('.Cartas');
    const cartas = document.querySelectorAll('.Cartas .carta');
    let autoMoveInterval;

    function startAutoMove() {
        autoMoveInterval = setInterval(() => {
            // Mueve cada carta a la posición del siguiente
            cartas.forEach((c, i) => {
                const nextIndex = (i + 1) % cartas.length;
                cartasContainer.insertBefore(c, cartas[nextIndex]);
            });
        }, 3000); // Cambia la velocidad de movimiento según tus necesidades
    }

    function stopAutoMove() {
        clearInterval(autoMoveInterval);
    }

    // Inicia la animación automática
    startAutoMove();

    // Detiene la animación cuando el mouse entra al contenedor
    cartasContainer.addEventListener('mouseenter', stopAutoMove);

    // Reanuda la animación cuando el mouse sale del contenedor
    cartasContainer.addEventListener('mouseleave', startAutoMove);
});