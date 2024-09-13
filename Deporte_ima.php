<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    /* ------------------------- Galeria de Deportes ------------------------ */
    #Deportes .galeria {
        display: flex;
        width: 100%;
        height: 320px;
        border-bottom: 4px solid #0f440eda;
        /*overflow: hidden; /* Agregar esto para que no se desborde el contenido */
    }

    #Deportes .galeria .imagenes {
        flex: 1;
        display: flex;
        flex-direction: column; /* Colocar los elementos verticalmente */
        transition: 0.5s; /* Reducir la duración de la transición */
        cursor: pointer;
        position: relative;
        border: 1px solid #ffffff;
    }

    #Deportes .galeria .imagenes:hover {
        flex: 3; /* Aumentar el tamaño en hover */
    }

    #Deportes .galeria .imagenes img {
        max-width: 100%;
        height: 100%; /* Ajustar la altura automáticamente */
        object-fit: cover;
    }

    #Deportes .galeria .imagenes .texto {
        position: absolute;
        background-color: rgba(0, 0, 0, 0.2);
        width: 100%;
        height: 100%;
        color: #40d313;
        opacity: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: opacity 0.3s ease;
    }

    #Deportes .galeria .imagenes:hover .texto {
        opacity: 1; /* Muestra el texto al hacer hover */
    }
</style>
<body>

    <section id="Deportes">
        <div class="galeria">
            <div class="imagenes">
                <img src="imagenes/futb.jpg" alt="">
                <div class="texto">
                    <h1>Futbol</h1>
                </div> 
            </div>
            <div class="imagenes">
                <img src="imagenes/basquet2.jpg" alt="">
                <div class="texto">
                    <h1>Basquetbol</h1>
                </div> 
            </div>
            <div class="imagenes">
                <img src="imagenes/karate.jpg" alt="">
                <div class="texto">
                    <h1>karate</h1>
                </div> 
            </div>
            <div class="imagenes">
                <img src="imagenes/volei.jpg" alt="">
                <div class="texto">
                    <h1>Voleibol</h1>
                </div> 
            </div>
            <div class="imagenes">
                <img src="imagenes/ajedrez1.jpg" alt="">
                <div class="texto">
                    <h1>Ajedrez</h1>
                </div> 
            </div>
        </div>
    </section>

</body>
</html>