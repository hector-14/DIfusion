window.addEventListener("scroll", function() {
    var servicio = document.getElementById("servicio");
    var miUl = document.getElementById("miUL");

    var servicioRect = servicio.getBoundingClientRect();
    var windowHeight = window.innerHeight;

    // Verifica si la sección "servicio" está en la vista del usuario mientras se desplaza
    if (servicioRect.top < windowHeight) {
        miUl.classList.add("abajo");
    }else{
        miUl.classList.remove("abajo")
    }
});

window.addEventListener("scroll", function() {
    var servicio = document.getElementById("servicio1");
    var miUl = document.getElementById("miUL1");

    var servicioRect = servicio.getBoundingClientRect();
    var windowHeight = window.innerHeight;

    // Verifica si la sección "servicio" está en la vista del usuario mientras se desplaza
    if (servicioRect.top < windowHeight) {
        miUl.classList.add("abajo");
    }else{
        miUl.classList.remove("abajo")
    }
});

window.addEventListener("scroll", function() {
    var servicio = document.getElementById("servicio2");
    var miUl = document.getElementById("miUL2");

    var servicioRect = servicio.getBoundingClientRect();
    var windowHeight = window.innerHeight;

    // Verifica si la sección "servicio" está en la vista del usuario mientras se desplaza
    if (servicioRect.top < windowHeight) {
        miUl.classList.add("abajo");
    }else{
        miUl.classList.remove("abajo")
    }
});

window.addEventListener("scroll", function() {
    var servicio = document.getElementById("servicio3");
    var miUl = document.getElementById("miUL3");

    var servicioRect = servicio.getBoundingClientRect();
    var windowHeight = window.innerHeight;

    // Verifica si la sección "servicio" está en la vista del usuario mientras se desplaza
    if (servicioRect.top < windowHeight) {
        miUl.classList.add("abajo");
    }else{
        miUl.classList.remove("abajo")
    }
});