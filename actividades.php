<?php include "header.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Actividades.css">
    <title>Document</title>
</head>
<body>

    <section id="titulo-Act">
        <div class="Act-fut">
            <h1>Deporte y Cultura</h1>
            <img class="Tuzo" src="imagenes/PortadaT1.png" alt="">
        </div>
    </section>

    <section class="Titulo">
        <h1>Deportes</h1>
    </section>

    <section id="Actividad">
        <div class="Deportes">
                <div class="Principal">
                    <img class="main" src="Nvaimagenes/FutFem.jpg" alt="">
                    <h1 class="name">Fútbol</h1>
                </div>
                <div class="Cartas_contenedor">
                    <div class="Contenido" data-name="Fútbol">
                        <img class="Cartas active" src="Nvaimagenes/FutFem.jpg" alt="">
                    </div>
                    <div class="Contenido" data-name="Voleibol">
                        <img class="Cartas" src="imagenes/volei.jpg" alt="">
                    </div>
                    <div class="Contenido" data-name="Futbol Americano">
                        <img class="Cartas" src="Nvaimagenes/DepFutbolA1.jpg" alt="">
                    </div>
                    <div class="Contenido" data-name="Ajedrez">
                        <img class="Cartas" src="imagenes/ajedrez1.jpg" alt="">
                    </div>
                    <div class="Contenido" data-name="Karate">
                        <img class="Cartas" src="imagenes/karate.jpg" alt="">
                    </div>
                    <div class="Contenido" data-name="Basquetbol">
                        <img class="Cartas" src="Nvaimagenes/DepBasquetbol.jpg" alt="">
                    </div>
                    <div class="Contenido" data-name="Gymnasio">
                        <img class="Cartas" src="imagenes/Gymnasio1.jpg" alt="">
                    </div>

                </div>
        </div>
    </section>

    <section class="Titulo">
            <h1>Cultura</h1>        
    </section>

    <section id="Cultura">
        <div class="Mosaico-cultura">
            <div class="actividad">
                <h1>Canto</h1>
                <img src="iconos/canto.png" alt="">
            </div>
            <div class="actividad">
                <h1>Lectura</h1>
                <img src="iconos/lectura.png" alt="">
            </div>
            <div class="actividad">
                <h1>Fotografía</h1>
                <img src="iconos/camara.png" alt="">
            </div>
        </div>
    </section>

    <section class="Titulo">
        <h1>Festividades</h1>
    </section>

    <div class="slideshow-container" id="Carrusel">
        <div class="mySlides fade">    
            <img src="imagenes/diam3.jpg" alt="">
            <div class="span">
            </div>
        </div>
        <div class="mySlides fade">
            <img src="imagenes/diam1.jpg" alt="">
            <div class="span">
            </div>
        </div>
        <div class="mySlides fade">
            <img src="imagenes/inde3.jpg" alt="">
            <div class="span"> 
            </div>
        </div>
        <div class="mySlides fade">
            <img src="imagenes/inde4.jpg" alt="">
            <div class="span">
            </div>
        </div>
        <div class="mySlides fade">
            <img src="imagenes/diam4.jpg" alt="">
            <div class="span">
            </div>
        </div>
        <div class="mySlides fade">
            <img src="imagenes/cultura.jpg" alt="">
            <div class="span">
            </div>
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>

    
    <script src="javascript/A_galeria.js"></script>
    <script src="javascript/A_Slider.js"></script>
</body>
</html>
<?php include "pie.php"?>
