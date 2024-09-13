// Obtener todas las imágenes pequeñas
let smallItems = document.querySelectorAll('.small-item');

// Agregar evento de clic a cada imagen pequeña
smallItems.forEach(function(item) {
    item.addEventListener('click', function() {
        // Obtener el índice de la imagen pequeña clicada
        let index = Array.from(smallItems).indexOf(item);

        // Obtener todas las imágenes grandes
        let lists = document.querySelectorAll('.item');

        // Mover las imágenes grandes según el índice de la imagen pequeña clicada
        for (let i = 0; i < index; i++) {
            document.getElementById('slide').appendChild(lists[0]);
        }
        for (let i = index; i < smallItems.length - 1; i++) {
            document.getElementById('slide').appendChild(lists[0]);
        }
    });
});
