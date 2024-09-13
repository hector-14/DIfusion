document.addEventListener("DOMContentLoaded", function () {
    window.addEventListener('scroll', function () {
        const imagen = document.querySelector('.imagen.img-container');
        const carreras = document.querySelector('.Carreras');
    
        if (imagen && carreras) {
            const carrerasRect = carreras.getBoundingClientRect();
            const imagenRect = imagen.getBoundingClientRect();
    
            if (carrerasRect.top < 0 && carrerasRect.bottom > 0) {
                if (-carrerasRect.top < 2000) {
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