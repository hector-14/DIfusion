<?php include "header.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <style>
    .descripcion{
        width: 100%;
        height: 400px;
    }
    /* Estilos para dividir la pantalla en dos columnas */
    .imagen-texto {
        display: flex;
        width: 100%;
        height: 100vh;
        max-height: 700px;
        overflow: hidden;
    }

    .columna-imagen {
        width: 50%;
        position: relative;
        overflow: hidden;
        justify-content: center;
        align-items: center;
        display: flex; /* Evita que la imagen se extienda fuera del div */
    }

    .imagen {
        
    }

    img{
        height: 350px;
        width: 400px;
        object-fit: contain;
    }

    .columna-contenido {
        width: 50%;
        overflow-y: scroll;
        height: 100%;
        padding: 20px; /* Añade espacio para que el contenido no esté pegado a los bordes */
    }

    .fixed-content {
        position: fixed;
        width: 400px; /* Tamaño específico de la imagen */
        height: 350px; /* Tamaño específico de la imagen */
        top: calc(100px + 20px); /* 100px es la altura del header, ajusta este valor si es diferente */
    }

    </style>
<body>

    <section id="mision">
        <div class="mision-vision">
           <ul>
            <li><img src="iconos/m2.png" alt="">
                <h1>Misión</h1>
                <p>Formar profesionales e investigadores (as) con preparación científica, tecnológica y humanística, para insertarse en el sector productivo.</p>
            </li>
            <li><img src="iconos/vis2.png" alt="">
                <h1>Visión</h1>
                <p>Ser una institución líder en la innovación y transferencia tecnológica, cuyos egresados(as) contribuyan al desarrollo y sustentabilidad de nuestro país.</p>
            </li>
            </ul> 
        </div>   
    </section>

    <section class="descripcion" id="descripcion">
        <div class="imagen-texto">
            <div class="columna-imagen">

                <div class="imagen img-container">
                    <img src="imagenes/labSis2.jpg" alt="">
                </div>
            </div>
            <div class="columna-contenido">
                <div class="contenidoC">
                    <p>En el TESOEM Contamos con 6 ingenierías, 3 carreras de licenciatura y 1 maestría en Ingeniería Industrial</p>
                    <h1>Ingenierías:</h1>
                </div>
                    <div class="contenidoC">
                        <h2>Sistemas Computacionales</h2>
                        <p>Se enfocam en el diseño, desarrollo y mantenimiento de sistemas de software y hardware, redes de computadoras y soluciones tecnológicas. Estos profesionales son responsables de identificar problemas informáticos, proponer soluciones, programar software, administrar bases de datos y garantizar la seguridad de los sistemas. Trabajan en una variedad de industrias y desempeñan un papel fundamental en la implementación de tecnología para optimizar procesos y mejorar la eficiencia.</p>
                        <a href="Sistemas.php">Conoce mas > </a>
                    </div>
                    <div class="contenidoC">
                        <h2>Tecnologias de información y comunicación</h2>
                        <p>Preparamos profesionales que lideran la gestión de tecnología e información, impulsando el éxito organizacional y la sostenibilidad. Nuestros graduados destacan por su liderazgo, habilidades críticas, competencia, ética empresarial y compromiso con la sostenibilidad, creando un impacto positivo en la sociedad.</p>
                        <a href="registro.php">Conoce mas > </a>
                    </div>
                    <div class="contenidoC">
                        <h2>Industrial</h2>
                        <p>Formar Ingenieros Industriales con una sólida preparación en la especialidad de Integración de Procesos e Impresión aditiva que coadyuve al crecimiento del sector productivo.</p>
                        <a href="registro.php">Conoce mas > </a>
                    <div class="contenidoC">
                            <h2>Energás Renovables</h2>
                            <p>Formar recursos humanos competentes para intervenir profesionalmente en proyectos, estrategias y acciones de generación, transformación y almacenamiento de energía proveniente de fuentes renovables, así como de uso eficiente de la energía, en el marco de un desarrollo sustentable.</p>
                            <a href="registro.php">Conoce mas > </a>
                    </div>
                    <div class="contenidoC">
                            <h2>Ambiental</h2>
                            <p>se centra en abordar cuestiones relacionadas con el medio ambiente y la sostenibilidad. Su labor consiste en diseñar y aplicar soluciones que minimicen el impacto negativo de las actividades humanas en el entorno natural. Esto incluye la gestión de residuos, la conservación de recursos naturales, la evaluación de la calidad del aire y del agua, el diseño de sistemas de energía renovable y la implementación de prácticas sostenibles en la industria y la infraestructura. Los ingenieros ambientales trabajan para proteger el medio ambiente y garantizar un equilibrio entre el desarrollo humano y la conservación del planeta.</p>
                            <a href="registro.php">Conoce mas > </a>
                    </div>
                    <div class="contenidoC">
                            <h2>Sistemas Automotrices</h2>
                            <p>Formar ingenieros que se desempeñen en el diseño y desarrollo de sistemas automotrices, mediante competencias científicas, tecnológicas y administrativas, con la directriz de atender las necesidades del sector automotriz, con una actitud ética y de liderazgo.</p>
                            <a href="registro.php">Conoce mas > </a>
                    </div>
                    <div class="contenidoC">
                            <h1>Licenciaturas:</h1>
                    </div>
                    <div class="contenidoC">
                        <h2>Administración</h2>
                        <p>Formar profesionales competentes de la creación, dirección e innovación de organizaciones, que enfrente desafíos en un entorno globalizado, con visión emprendedora, ética, humana y de responsabilidad social.</p>
                        <a href="registro.php">Conoce mas > </a>
                    </div>
                    <div class="contenidoC">
                        <h2>Gastronomia</h2>
                        <p>Formar integralmente profesionales de la Gastronomía, líderes, creativos, con ética, responsabilidad social, vocación de servicio y visión estratégica; capaz de diseñar, desarrollar, aplicar el arte de técnicas culinarias; así como los conocimientos científicos en la innovación de la gastronomía y gestionar empresas del sector de alimentos y bebidas que contribuyan al desarrollo sustentable de la región.</p>  
                        <a href="registro.php">Conoce mas > </a>
                    </div>
                    <div class="contenidoC">
                        <h2>Contaduría Pública</h2>
                        <p>Formar profesionales competitivos, capaces de diseñar, establecer, aplicar, controlar y evaluar sistemas de información financiera, fiscal y administrativa, para la toma de decisiones de las entidades económicas nacionales e internacionales, con una actitud ética, crítica, emprendedora y de liderazgo, a través de la investigación y el uso de la tecnología de la información y la comunicación, fomentando el desarrollo sustentable.</p>
                        <a href="registro.php">Conoce mas > </a>
                    </div>
            </div>     
        </div>
    </div>     
</section>

<section id="mision">
        <div class="mision-vision">
           <ul>
            <li><img src="iconos/m2.png" alt="">
                <h1>Misión</h1>
                <p>Formar profesionales e investigadores (as) con preparación científica, tecnológica y humanística, para insertarse en el sector productivo.</p>
            </li>
            <li><img src="iconos/vis2.png" alt="">
                <h1>Visión</h1>
                <p>Ser una institución líder en la innovación y transferencia tecnológica, cuyos egresados(as) contribuyan al desarrollo y sustentabilidad de nuestro país.</p>
            </li>
            </ul> 
        </div>   
    </section>

    <script>
        var imagenFija = document.querySelector('.imagen.img-container');
        var contenido = document.querySelector('.Carreras');
        var imagenAltura = imagenFija.offsetHeight;
        var contenidoAltura = contenido.offsetHeight;

        window.addEventListener('scroll', function() {
            var scrollTop = window.scrollY;
            var windowHeight = window.innerHeight;
            var offset = contenido.offsetTop;

            if (scrollTop >= offset && scrollTop <= (offset + contenidoAltura - imagenAltura)) {
                imagenFija.classList.add('fixed-content');
            } else {
                imagenFija.classList.remove('fixed-content');
            }
        });
    </script>
</body>
</html>