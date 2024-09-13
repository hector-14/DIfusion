document.addEventListener("DOMContentLoaded", async function () {   
    Swal.fire({
    position: "center",
    icon: "success",
    title: "Gracias por Registrarte",
    showConfirmButton: false,
    timer: 1500
    });
    setTimeout(function() {
        // Redirige a index.php
        window.location.href = "index.php";
    }, 2000);
});