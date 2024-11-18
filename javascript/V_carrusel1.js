var slideIndex = 1;
    var timer; // Variable para el temporizador

    showSlides(slideIndex);


    function current(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("slides");
        var dots = document.getElementsByClassName("puntos");

        if (n > slides.length) { slideIndex = 1; }
        if (n < 1) { slideIndex = slides.length; }

        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }

        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }

        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }

    // Detener la animación cuando el cursor está sobre el carrusel
    var carousel = document.getElementById("carru"); // Reemplaza "tuCarrusel" con el ID de tu carrusel
    carousel.addEventListener("mouseenter", function() {
        clearTimeout(timer);
    });

    // Reanudar la animación cuando el cursor se retira
    carousel.addEventListener("mouseleave", function() {
        timer = setInterval(function () { plusSlides(1); }, 5000);
    });

    // Iniciar el temporizador al cargar la página
    timer = setInterval(function () { plusSlides(1); }, 5000);