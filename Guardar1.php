<?php
include("conexionDB.php");

// Verificar la conexión
if ($conexion->connect_error) {
    die(json_encode(array("status" => "error", "message" => "Conexión fallida: " . $conexion->connect_error)));
}

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

            // Ejecutar la consulta y verificar si se guardó correctamente
            if ($resultado1 && $resultado2) {
                // Asignar la respuesta correctamente
                $response = json_encode(array("status" => "success", "message" => "Registro exitoso"));
            } else {
                $response = json_encode(array("status" => "error", "message" => "Error: " . $conexion->error));
            }

        } else {
            $response = json_encode(array("status" => "error", "message" => "Error al guardar el usuario: " . $conexion->error));
        }

    } else {
        $response = json_encode(array("status" => "error", "message" => "Por favor completa todos los campos requeridos."));
    }
} else {
    $response = json_encode(array("status" => "error", "message" => "Algo salió mal."));
}

// Mostrar la respuesta al cliente
echo "<script type='text/javascript'>
        window.Android.handleResponse('$response');
      </script>";

// Cerrar la conexión a la base de datos
$conexion->close();

?>




