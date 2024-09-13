<?php

include("conexionDB.php");

if (isset($_POST['registrar'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['correo']) >= 1) {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $correo = $_POST['correo'];

        //Guardar datos en la base de los usuarios
        $consulta = "INSERT INTO usuario (nombre, apellidos, correo, fecha) VALUES ('$nombre', '$apellido', '$correo', NOW())";
        $resultado = mysqli_query($conexion, $consulta);

        if ($resultado) {

            // Obtener el ID del usuario recién registrado
            $idUsuario = mysqli_insert_id($conexion);

            // Guardar las carreras seleccionadas en 'carrera_uno' y 'carrera_dos'
            $carrera1 = $_POST['1-Carrera'];
            $carrera2 = $_POST['2-Carrera'];

            $consulta1 = "INSERT INTO carrera_uno (idUsuario, N_Carrera) VALUES ($idUsuario, '$carrera1')";
            $consulta2 = "INSERT INTO carrera_dos (idUsuario, N_Carrera) VALUES ($idUsuario, '$carrera2')";

            $resultado1 = mysqli_query($conexion, $consulta1);
            $resultado2 = mysqli_query($conexion, $consulta2);

            if ($resultado1 && $resultado2) {
                echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
                echo '<script src="javascript/AlertaGracias.js"></script>';
            }

        } else {
            echo "Error, no se agregó ningún dato del usuario";
        }
    }
} else {
    echo "Algo salió mal";
}


?>