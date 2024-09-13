document.addEventListener("DOMContentLoaded", function () {
    const enlaces = document.querySelectorAll("#Espacios a");

    enlaces.forEach(function (enlace) {
        enlace.addEventListener("click", function (event) {
            event.preventDefault(); // Evitar la acción predeterminada del enlace

            // Quitar la clase "ampliado" de todos los enlaces
            enlaces.forEach(function (otroEnlace) {
                otroEnlace.classList.remove("ampliado");
            });

            // Aplicar la clase "ampliado" al enlace actual
            enlace.classList.add("ampliado");

            // Centrar la imagen clicada
            centrarImagen(enlace);
        });

        // Agregar manejador de eventos de doble clic para restaurar tamaño normal
        enlace.addEventListener("dblclick", function (event) {
            event.preventDefault(); // Evitar la acción predeterminada del doble clic

            // Quitar la clase "ampliado" del enlace actual
            enlace.classList.remove("ampliado");
        });
    });
});
