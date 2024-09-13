document.addEventListener("DOMContentLoaded", function() {
    const videoPopup = document.getElementById('videoPopup');
    const closeButton = document.getElementById('closeButton');
  
    // Mostrar el video emergente al cargar la página
    videoPopup.style.display = 'flex';
    videoPopup.style.zIndex = '2'
    // Cerrar el video emergente al hacer clic en el botón "Cerrar"
    closeButton.addEventListener('click', function() {
      videoPopup.style.display = 'none';
    });
  });