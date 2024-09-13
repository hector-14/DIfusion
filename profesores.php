<?php include "header.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Profesores.css">
    <title>Document</title>
</head>
<body>
    <section id="Portada">
        <div class="titulo">
            <h1>Profesores</h1>
        </div>
    </section>

    <section id="titulo">
        <div class="texto">
            <h1>Experiencias</h1>
        </div>
    </section>

    <section id="Experiencias">
        <div class="video">
            <iframe src="https://www.facebook.com/plugins/video.php?&href=https%3A%2F%2Fwww.facebook.com%2FTESOEMOficial%2Fvideos%2F461851705787157%2F&show_text=false&width=560&t=0" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
        </div>
        <div class="video">
            <iframe src="https://www.facebook.com/plugins/video.php?&href=https%3A%2F%2Fwww.facebook.com%2FTESOEMOficial%2Fvideos%2F529747868994138%2F&show_text=false&width=560&t=0" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
        </div>
        <div class="button">
            <span class="puntos" onclick="Slide2(1)"></span>
            <span class="puntos" onclick="Slide2(2)"></span>
        </div>       
    </section>

    <section id="Slider">
        <div class="profesor">
            <div class="imagen">
                <img src="" alt="">
            </div>
            <div class="descripcion">
                <h1>Javier Martínez</h1>
                <h2>Ingeniería Computacional</h2>
                <span>"Escucha con empatía y sin prejuicios; cada historia tiene capas, y comprenderlas es fundamental para ayudar a otros."</span>
            </div>
        </div>
        <div class="profesor">
            <div class="imagen">
                <img src="" alt="">
            </div>
            <div class="descripcion">
                <h1>María Lopéz</h1>
                <h2>Ingeniería Biomédica</h2>
                <span>"Explora más allá de los libros; la verdadera educación se encuentra en la aplicación práctica y la búsqueda de soluciones a problemas reales."</span>
            </div>
        </div>
        <div class="profesor">
            <div class="imagen">
                <img src="" alt="">
            </div>
            <div class="descripcion">
                <h1>Carlos Rodríguez</h1>
                <h2>Ciencias Políticas</h2>
                <span>"Mantén una mente abierta y sé crítico; entender la política implica analizar múltiples perspectivas y cuestionar las normas establecidas."</span>
            </div>
        </div>
        <div class="profesor">
            <div class="imagen">
                <img src="" alt="">
            </div>
            <div class="descripcion">
                <h1>David Sánchez</h1>
                <h2>Inteligencia Artificial</h2>
                <span>"Innova constantemente y colabora; en el campo de la IA, el progreso se alcanza más rápido cuando se comparten ideas y se trabaja en equipo."</span>
            </div>
        </div>
        <div class="profesor">
            <div class="imagen">
                <img src="" alt="">
            </div>
            <div class="descripcion">
                <h1>Ana García</h1>
                <h2>Ingeniería Microbiológica</h2>
                <span>"Observa la belleza en los detalles; la atención a las pequeñas cosas puede transformar un espacio ordinario en algo extraordinario."</span>
            </div>
        </div>
        <div class="profesor">
            <div class="imagen">
                <img src="" alt="">
            </div>
            <div class="descripcion">
                <h1>Sofía Torres</h1>
                <h2>Gastronomía y Arte Culinario</h2>
                <span>"Experimenta con pasión y creatividad en la cocina; cada plato es una obra de arte que refleja tu dedicación y amor por la gastronomía."</span>
            </div>
        </div>
        <div class="profesor">
            <div class="imagen">
                <img src="" alt="">
            </div>
            <div class="descripcion">
                <h1>Luis Fernandez</h1>
                <h2>Ingeniería Industrial</h2>
                <span>"Optimiza los procesos con eficiencia y visión; en la ingeniería industrial, cada mejora cuenta para crear sistemas más efectivos y sostenibles."</span>
            </div>
        </div>
        <div class="botones">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
            <span class="dot" onclick="currentSlide(6)"></span>
        </div>
    </section>
    
    <script src="javascript/P_SliderVideo.js"></script>
    <script src="javascript/P_Slider.js"></script>
</body>
</html>

<?php include "pie.php"?>