<?php include "header.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Transporte.css">
    <title>Document</title>
</head>
<body>

    <div class="video-popup" id="videoPopup">
        <div class="video-container">
            <iframe src="https://www.facebook.com/plugins/video.php?&href=https%3A%2F%2Fwww.facebook.com%2FTESOEMOficial%2Fvideos%2F6283086948402738%2F&show_text=false&width=560&t=0" width="720" height="650" style="border:none; overflow:hidden;" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
            <button id="closeButton">X</button>
        </div>
    </div>


    <div class="slideshow-container" id="Carrusel">
        <div class="mySlides fade">    
            <img src="imagenes/portadaTrans.jpg">
        </div>
        <div class="mySlides fade">
            <img src="imagenes/S-trasporte1.jpg">
        </div>
        <div class="mySlides fade">
            <img src="imagenes/transporte1.jpeg">
        </div>
        <div class="mySlides fade">
            <img src="imagenes/S-trasporte.jpg">
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <div class="botones">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
        </div>
    </div>

    <section id="Titulo">
        <h1>¿Sabías que?</h1>
        <p>El TESOEM cuenta con un corredor universitario<br>
        Aquí puedes revisar las rutas de transporte público que tenemos dentro de nuestra casa de estudios.</p>
    </section>

    <section id="Trasporte">
        <h1 class="trasporte">Rutas</h1>
        <div class="Contenido-rutas">
            <ul>
                <li>
                    <a href="#boton-1" class="button activo">
                        <div class="rutas">
                            <span>Polivalente Ayotla</span>
                            <div class="span">
                                <span>Ruta 1</span>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#boton-2" class="button">
                        <div class="rutas">
                            <span>Bomberos, Ixtapaluca</span>
                            <div class="span">
                                <span>Ruta 2</span>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#boton-3" class="button">
                        <div class="rutas">
                            <span>Palacio Municipal, Ixtapaluca</span>
                            <div class="span">
                                <span>Ruta 3</span>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#boton-4" class="button">
                        <div class="rutas">
                            <span>Metro La Paz</span>
                            <div class="span">
                                <span>Ruta 4</span>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#boton-5" class="button">
                        <div class="rutas">
                            <span>Palacio municipal, La Paz</span>
                            <div class="span">
                                <span>Ruta 5</span>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#boton-6" class="button">
                        <div class="rutas">
                            <span>Rotonda (Base ruta 106)</span>
                            <div class="span">
                                <span>Ruta 6</span>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#boton-7" class="button">
                        <div class="rutas">
                            <span>Palacio Municipal, Valle de Chalco</span>
                            <div class="span">
                                <span>Ruta 7</span>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#boton-8" class="button">
                        <div class="rutas">
                            <span>RAv. Carmelo Peres y Av. Pantitlán</span>
                            <div class="span">
                                <span>Ruta 8</span>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#boton-9" class="button">
                        <div class="rutas">
                            <span>Av. La Flosesta y Av. Pantitlán</span>
                            <div class="span">
                                <span>Ruta 9</span>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
            <div id="boton-1" class="ruta activo">
                <h1>Ruta 1: Polivalente Ayotla - TESOEM </h1>
                <div class="turnos">
                    <div class="matutino">
                        <h1><strong>Matutino</strong></h1>
                        <p>Salida: 06:35 Arribo al TESOEM: 6:50</p> <p>Salida: 14:10 Arribo al gimnasio: 14:25 </p>    
                    </div>
                    <div class="vespertino">
                        <h1><strong>Vespertino</strong></h1>
                        <p>Salida: 13:35 Arribo al TESOEM: 13:50</p> <p> Salida: 20:40 Arribo al gimnasio: 20:55 </p>
                    </div>
                </div>
                <div class="mapa">
                    <iframe src="https://www.google.com/maps/d/embed?mid=1JfdfIexiOiaBx8x-58t_AjsszUg9bdc&ehbc=2E312F" width="760" height="420"></iframe>       
                </div>
            </div>
            <div id="boton-2" class="ruta">
                <h1>Ruta 2: Bomberos, Ixtapaluca - Tesoem </h1>
                <div class="turnos">
                    <div class="matutino">
                    <h1><strong>Matutino</strong></h1>
                        <p>Salida: 06:30 <br> Arribo al TESOEM: 6:50 <br> Salida: 14:10 <br> Arribo a los Bomberos: 14:25 </p>
                    </div>
                    <div class="vespertino">
                    <h1><strong>Vespertino</strong></h1>
                        <p>Salida: 13:30  <br> Arribo al TESOEM: 13:50 <br> Salida: 20:40 <br> Arribo a los Bomberos: 21:00 </p>
                    </div>
                </div>
                <div class="mapa">
                    <iframe src="https://www.google.com/maps/d/embed?mid=1Cftn5KWA512ax0fVoCB64TM7YJbmqA8&ehbc=2E312F" width="760" height="420"></iframe>
                </div>
            </div>
            <div id="boton-3" class="ruta">
                <h1>Ruta 3: Palacio municipal, Ixtapaluca - Tesoem </h1>
                <div class="turnos">
                    <div class="matutino">
                        <h1><strong>Matutino</strong></h1>
                        <p>Salida: 06:15 <br> Arribo al TESOEM: 6:50 <br> Salida: 14:10 <br> Arribo al Palacio municipal: 14:45 </p>
                    </div>
                    <div class="vespertino">
                        <h1><strong>Vespertino</strong></h1>
                        <p>Salida: 13:15 <br> Arribo al TESOEM: 13:50 <br> Salida: 20:40 <br> Arribo al Palacio municipal: 21:15 </p>
                    </div>
                </div>
                <div class="mapa">
                    <iframe src="https://www.google.com/maps/d/embed?mid=1VRF8mBMP-qJC8Y3C04rUYiDRgfPm5BM&ehbc=2E312F" width="760" height="420"></iframe>
                </div>
            </div>
            <div id="boton-4" class="ruta">
                <h1>Ruta 4: Metro La Paz - Tesoem</h1>
                <div class="turnos">
                    <div class="matutino">
                        <h1><strong>Matutino</strong></h1>
                        <p>Salida: 06:35 <br> Arribo al TESOEM: 6:50 <br> Salida: 14:10 <br> Arribo al Metro: 14:45 </p>
                    </div>
                    <div class="vespertino">
                        <h1><strong>Vespertino</strong></h1>
                        <p>Salida: 13:35 <br> Arribo al TESOEM: 13:50 <br> Salida: 20:40 <br> Arribo al Metro: 20:55 </p>
                    </div>
                </div>
                <div class="mapa">
                    <iframe src="https://www.google.com/maps/d/embed?mid=1FT-SPgGtP1vBpWLzPtoPGAkgLAi1O9s&ehbc=2E312F" width="760" height="420"></iframe>
                </div>
            </div>
            <div id="boton-5" class="ruta">
                <h1>Ruta 5: Palacion Municipal, La Paz - TESOEM</h1>
                <div class="turnos">
                    <div class="matutino">
                        <h1><strong>Matutino</strong></h1>
                        <p>Salida: 06:35 <br> Arribo al TESOEM: 6:50 <br> Salida: 14:10 <br> Arribo al Palacio Municipal: 14:25 </p>
                    </div>
                    <div class="vespertino">
                        <h1><strong>Vespertino</strong></h1>
                        <p>Salida: 13:35 <br> Arribo al TESOEM: 13:50 <br> Salida: 20:40 <br> Arribo al Palacio Municipal: 20:55 </p>
                    </div>
                </div>
                <div class="mapa">
                    <iframe src="https://www.google.com/maps/d/embed?mid=1_06CFY8QeIpva9DkYEfHj6mN-5LhUAs&ehbc=2E312F" width="760" height="420"></iframe>
                </div>
            </div>
            <div id="boton-6" class="ruta">
                <h1>Ruta 6: Rotonda(base ruta 104) - TESOEM</h1>
                <div class="turnos">
                    <div class="matutino">
                        <h1><strong>Matutino</strong></h1>
                        <p>Salida: 06:35 <br> Arribo al TESOEM: 6:50 <br> Salida: 14:10 <br> Arribo a la rotonda: 14:20 </p>
                    </div>
                    <div class="vespertino">
                        <h1><strong>Vespertino</strong></h1>
                        <p>Salida: 13:35 <br> Arribo al TESOEM: 13:50 <br> Salida: 20:40 <br> Arribo a la rotonda: 20:55 </p>
                    </div>
                </div>
                <div class="mapa">
                    <iframe src="https://www.google.com/maps/d/embed?mid=1cWiq580Q09t-Ex1baSh6Bys6kGBRZRw&ehbc=2E312F" width="760" height="420"></iframe>
                </div>
            </div>
            <div id="boton-7" class="ruta">
                <h1>Ruta 7: Palacio municipal, Valle de Chalco - TESOEM</h1>
                <div class="turnos">
                    <div class="matutino">
                        <h1><strong>Matutino</strong></h1>
                        <p>Salida: 06:20 <br> Arribo al TESOEM: 6:50 <br> Salida: 14:10 <br> Arribo al Palacio Municipal: 14:40</p>
                    </div>
                    <div class="vespertino">
                        <h1><strong>Vespertino</strong></h1>
                        <p>Salida: 13:20 <br> Arribo al TESOEM: 13:50 <br> Salida: 20:40 <br> Arribo al Palacio Municipal: 21:10</p>
                    </div>
                </div>
                <div class="mapa">
                    <iframe src="https://www.google.com/maps/d/embed?mid=1jhX9qCFWYqK0P7f-hwJ5p9uljVIoj6M&ehbc=2E312F" width="760" height="420"></iframe>
                </div>
            </div>
            <div id="boton-8" class="ruta">
                <h1>Ruta 8: Av.Carmelo Pérez y Av.Pantitlan - TESOEM</h1>
                <div class="turnos">
                    <div class="matutino">
                        <h1><strong>Matutino</strong></h1>
                        <p>Salida: 06:20 <br> Arribo al TESOEM: 6:50 <br> Salida: 14:10 <br> Arribo a Av.Carmelo: 14:40</p>
                    </div>
                    <div class="vespertino">
                        <h1><strong>Vespertino</strong></h1>
                        <p>Salida: 13:35 <br> Arribo al TESOEM: 13:50 <br> Salida: 20:40 <br> Arribo a Av.Carmelo: 21:15</p>
                    </div>
                </div>
                <div class="mapa">
                    <iframe src="https://www.google.com/maps/d/embed?mid=1o57lg8YXc3rUEkLT8nEq4a4I4dXZlyY&ehbc=2E312F" width="760" height="420"></iframe>
                </div>
            </div>
            <div id="boton-9" class="ruta">
                <h1>Ruta 9: Av.La Floresta y Av.Pantitlan - TESOEM</h1>
                <div class="turnos">
                    <div class="matutino">
                        <h1><strong>Matutino</strong></h1>
                        <p>Salida: 06:30 <br> Arribo al TESOEM: 6:50 <br> Salida: 14:10 <br> Arribo a Av.Floresta: 14:35 </p>
                    </div>
                    <div class="vespertino">
                        <h1><strong>Vespertino</strong></h1>
                        <p>Salida: 13:30 <br> Arribo al TESOEM: 13:50 <br> Salida: 20:40 <br> Arribo a Av.Floresta: 21:15 </p>
                    </div>
                </div>
                <div class="mapa">
                    <iframe src="https://www.google.com/maps/d/embed?mid=1mSAvfmDQQZjwR0suUizGAnX6xZ1oHO8&ehbc=2E312F" width="760" height="420"></iframe>
                </div>
            </div>
        </div>    
    </section>

    <script src="javascript/T_video.js"></script>
    <script src="javascript/Carrusel_trasporte.js"></script>
    <script src="javascript/T_mapas.js"></script>
</body>
</html>
<?php include "pie.php"?>