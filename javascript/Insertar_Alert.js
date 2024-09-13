document.addEventListener("DOMContentLoaded", async function () {
    Swal.fire('Datos agregados correctamente y correo enviado');
    setTimeout(function() {
        window.location.href = "index.php";
    }, 3000);
});
