const botones = document.querySelectorAll(".button"); // Obtener todas las etiquetas con la clase "boton"

    botones.forEach(function (boton) {
        boton.addEventListener("click", function (event) {
            event.preventDefault(); // Evitar que el enlace se siga y recargue la página

            // Obtener el ID de destino desde el atributo "href" del enlace
            const idDestino = boton.getAttribute("href").substring(1);

            // Ocultar todos los elementos con la clase "Texto"
            const textos = document.querySelectorAll(".ruta");
            textos.forEach(function (texto) {
                texto.classList.remove("activo");
            });

            // Mostrar solo el elemento con el ID de destino
            const elementoDestino = document.getElementById(idDestino);
            if (elementoDestino) {
                elementoDestino.classList.add("activo");
            }
        });
    });