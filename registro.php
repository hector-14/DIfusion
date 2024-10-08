<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Registro.css">
    <link rel="icon" href="iconos/tesoem4.png">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="javascript/registro.js"></script>
    <title>Registro</title>
</head>
<body>
    <div class="registro">
        <div class="contenido">
            <div class="Logo">
                <img src="imagenes/TESOEM.png" alt="">
            </div>
            <div class="Formulario">
                <form action="Guardar.php" method="post">
                    <h1>Registrate para saber más</h1>
                    <label for="">Nombre:</label><br>
                    <input type="text" name="nombre" placeholder="Nombre" required><br>
                    <label for="">Apellidos:</label><br>
                    <input type="text" name="apellido" placeholder="Apellido" required><br>
                    <label for="">Correo Electronico:</label><br>
                    <input type="mail" name="correo" placeholder="ejemplo@outlook.com" required><br>
                    <h2>¿Qué carrera es de tu interes?</h2>
                    <label for="PCarrera">Primer carrera:</label><br>
                    <select class="PCarrera" name="1-Carrera" id="PCarrera">
                        <option value="Sistemas Computacionales">Sistemas Computacionales</option>
                        <option value="Tecnologias de la Información y Comunicación">Tecnologías de la Información y Comunicación</option>
                        <option value="Contabilidad">Contabilidad</option>
                        <option value="Gastronomía">Gastronomía</option>
                        <option value="Industrial">Industrial</option>
                        <option value="Administración">Administración</option>
                        <option value="Ambiental">Ambiental</option>
                        <option value="Energías Renovables">Energías Renovables</option>
                        <option value="Sistemas Automotrices">Sistemas Automotrices</option>
                    </select><br>
                    <label for="SCarrera">Segunda carrera:</label><br>
                    <select class="SCarrera" name="2-Carrera" id="SCarrera">
                        <option value="Sistemas Computacionales">Sistemas Computacionales</option>
                        <option value="Tecnologias de la Información y Comunicación">Tecnologias de la Información y Comunicación</option>
                        <option value="Contabilidad">Contabilidad</option>
                        <option value="Gastronomía">Gastronomía</option>
                        <option value="Industrial">Industrial</option>
                        <option value="Administración">Administración</option>
                        <option value="Ambiental">Ambiental</option>
                        <option value="Energías Renovables">Energías Renovables</option>
                        <option value="Sistemas Automotrices" selected>Sistemas Automotrices</option>
                    </select><br>
                    <button class="submit" type="submit" name="registrar">Registrar</button>
                    <button class="submit" type="reset">Borrar</button>
                </form>
            </div>
            <div>
                <a href="index.php"><img src="iconos/volver.png" alt=""></a>
            </div>
        </div>
    </div>
    
</body>
</html>