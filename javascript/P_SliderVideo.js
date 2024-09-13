var slideIndex2 = 1;
    var timer2; // Variable para el temporizador

    showSlides2(slideIndex2);

    function Slide2(n) {
        showSlides2(slideIndex2 = n);
    }

    function showSlides2(n) {
        var i;
        var slides = document.getElementsByClassName("video");
        var puntos = document.getElementsByClassName("puntos");

        if (n > slides.length) { slideIndex2 = 1; }
        if (n < 1) { slideIndex2 = slides.length; }

        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }

        for (i = 0; i < puntos.length; i++) {
            puntos[i].className = puntos[i].className.replace(" on", "");
        }

        slides[slideIndex2 - 1].style.display = "flex";
        puntos[slideIndex2 - 1].className += " on";
    }