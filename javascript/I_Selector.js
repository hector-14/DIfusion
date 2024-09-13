const main = document.querySelector('.main');
const thumbnails = document.querySelectorAll('.carta');
let currentIndex = 0;
let intervalId;

function showImage(index) {
    const active = document.querySelector('.active');
    active.classList.remove('active');
    thumbnails[index].classList.add('active');
    main.src = thumbnails[index].src;
}

function nextImage() {
    currentIndex = (currentIndex + 1) % thumbnails.length;
    showImage(currentIndex);
}

function startInterval() {
    intervalId = setInterval(nextImage, 3000);
}

function stopInterval() {
    clearInterval(intervalId);
}

thumbnails.forEach((thumb, index) => {
    thumb.addEventListener('click', function () {
        currentIndex = index;
        showImage(currentIndex);
        stopInterval(); // Detiene el intervalo al hacer clic en una miniatura
    });

    thumb.addEventListener('mouseover', stopInterval);
    thumb.addEventListener('mouseout', startInterval);
});

// Inicia el intervalo cuando se carga la página
startInterval();
