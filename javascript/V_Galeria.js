const main = document.querySelector('.main');
const thumbnails = document.querySelectorAll('.Cartas');

thumbnails.forEach(thumb => {
    thumb.addEventListener('click', function() {
        const active = document.querySelector('.active');
        active.classList.remove('active');
        this.classList.add('active');
        main.src = this.src;

        // Seleccionar el contenedor .Contenido actual
        const container = this.closest('.Contenido');

        // Obtener el texto correspondiente a la miniatura seleccionada
        const name = container.getAttribute('data-name');

        // Elementos a animar
        const nameElement = document.querySelector('#Actividad .Deportes .Principal .name');
        const mainImage = document.querySelector('.main');

        // Animación al cambiar texto e imagen
        nameElement.style.animation = 'none';
        mainImage.style.animation = 'none';

        // Delay para permitir que se elimine la animación antes de aplicarla nuevamente
        setTimeout(() => {
            nameElement.textContent = name;
            nameElement.style.animation = 'showcontent 1s ease-in-out forwards';
            //mainImage.style.animation = 'showcontent 1s ease-in-out forwards';
        }, 50);
    });
});