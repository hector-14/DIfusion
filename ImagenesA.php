<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Animación de cambio de imagen</title>
<style>
    .rotate-vertical-center {
        animation: rotate-vertical-center 1s;
    }
    
    @keyframes rotate-vertical-center {
        0% {
            transform: rotateY(0);
        }
        100% {
            transform: rotateY(360deg);
        }
    }
</style>
</head>
<body>
    <section id="Galeria">
        <div class="Mosaico">
            <div class="foto" onclick="cambiarImagen(this)">
                <img src="imagenes/cultura.jpg" alt="">
                <div class="foto2">
                    <img src="imagenes/diaM.jpg" alt="">
                </div>
            </div>
            <div class="foto" onclick="cambiarImagen(this)">
                <img src="imagenes/diaM.jpg" alt="">
                <div class="foto2">
                    <img src="imagenes/diam1.jpg" alt="">
                </div>
            </div>
            <div class="foto" onclick="cambiarImagen(this)">
                <img src="imagenes/diam1.jpg" alt="">
                <div class="foto2">
                    <img src="imagenes/cultura.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <script>
        function cambiarImagen(div) {
            var img1 = div.querySelector("img");
            var img2 = div.querySelector(".foto2 img");
            var tempSrc = img1.src;

            img1.classList.add("rotate-vertical-center");
            img2.classList.add("rotate-vertical-center");

            setTimeout(function() {
                img1.src = img2.src;
                img2.src = tempSrc;

                img1.classList.remove("rotate-vertical-center");
                img2.classList.remove("rotate-vertical-center");
            }, 1000);
        }
    </script>
</body>
</html>
