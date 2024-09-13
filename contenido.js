document.addEventListener("DOMContentLoaded", function () {

    /* -------------------------- Carrusel Nuevo --------------------------*/


    /* Carrusel Anterior*/
    // Cambio automático de imagen cada 5 segundos (5000 milisegundos)

    
    
    /*let isScrolling = false;
    const menu = document.querySelector(".menu");
    const delay = 2000;
    let isHovered = false;

    function hideMenu() {
        menu.style.right = "-200px"; // Oculta el menú por completo
    }

    window.addEventListener("scroll", function () {
        isScrolling = true;
        menu.style.right = "-162px"; // Muestra una parte del menú durante el desplazamiento

        if (!isHovered) {
            setTimeout(hideMenu, delay);
        }
    });

    menu.addEventListener("mouseenter", function () {
        if (!isHovered) {
            menu.style.right = "0px"; // Muestra el menú por completo cuando el cursor está sobre él

            // Cancela la función de ocultar el menú si el cursor está sobre el menú
            clearTimeout(hideMenu);
        }
    });

    menu.addEventListener("mouseleave", function () {
        if (!isScrolling) {
            menu.style.right = "-162px"; // Muestra una parte del menú cuando el cursor se aleja

            // Establece la función de ocultar el menú si no hay desplazamiento
            hideMenu();
        }
    });*/


    // Animación para ocultar el menú lateral
    
    
    /*let isScrolling = false;
    const menu = document.querySelector(".menu");
     // Tiempo en milisegundos antes de ocultar el menú
    let isHovered = false;

    /*menu.addEventListener("mouseenter", function () {
        isHovered = true;
        menu.style.right = "0"; // Muestra el menú completo cuando se pasa el cursor
    });*/

    /*menu.addEventListener("mouseleave", function () {
        isHovered = false;
        
        //if (!isScrolling) {
            //setTimeout(function () {
                if (!isHovered) {
                    menu.style.right = "-200px"; // Oculta el menú después de un tiempo de inactividad
                }
            //});
        //}
    });*/

    /*
    function hideMenu() {
        menu.style.right = "-200px"; // Oculta el menú por completo
    }
    */

   
    //menu.style.right ="0px"

    // Detener la animación cuando el usuario interactúa con el menú
    /*menu.addEventListener("mouseenter", function () {
        isScrolling = true;
        menu.style.right = "-162px";
        if(!isScrolling){
            menu.style.right = "0"; // Muestra el menú completo cuando se pasa el cursor
        }
    });*/



    /*------------------------- Funcionalidad Carreras ---------------------*/

    window.addEventListener('scroll', function () {
        const imagen = document.querySelector('.imagen.img-container');
        const carreras = document.querySelector('.Carreras');
    
        if (imagen && carreras) {
            const carrerasRect = carreras.getBoundingClientRect();
            const imagenRect = imagen.getBoundingClientRect();
    
            if (carrerasRect.top < 0 && carrerasRect.bottom > 0) {
                if (-carrerasRect.top < 1900) {
                    imagen.style.transform = `translateY(${-carrerasRect.top}px)`;
                } else {
                    imagen.style.transform = 'static';
                }
            } else if (carrerasRect.top < 0) {
                imagen.style.transform = `translateY(${-carrerasRect.bottom}px)`;
            } else {
                imagen.style.transform = 'translateY(0)';
            }
        }
    });


});
