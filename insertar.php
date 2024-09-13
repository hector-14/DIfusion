<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

include("conexionDB.php");

if (isset($_POST['registrar'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['correo']) >= 1) {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $correo = $_POST['correo'];

        // Insertar usuario en la tabla 'usuario'
        $consulta = "INSERT INTO usuario (nombre, apellidos, correo) VALUES ('$nombre', '$apellido', '$correo')";
        $resultado = mysqli_query($conexion, $consulta);

        if ($resultado) {
            // Obtener el ID del usuario recién registrado
            $idUsuario = mysqli_insert_id($conexion);

            // Insertar las carreras seleccionadas en 'carrera_uno' y 'carrera_dos'
            $carrera1 = $_POST['1-Carrera'];
            $carrera2 = $_POST['2-Carrera'];

            $consulta1 = "INSERT INTO carrera_uno (idUsuario, N_Carrera) VALUES ($idUsuario, '$carrera1')";
            $consulta2 = "INSERT INTO carrera_dos (idUsuario, N_Carrera) VALUES ($idUsuario, '$carrera2')";

            $resultado1 = mysqli_query($conexion, $consulta1);
            $resultado2 = mysqli_query($conexion, $consulta2);

            $carrerasConsulta = "SELECT N_Carrera FROM carrera_uno WHERE idUsuario = $idUsuario";
            $resultadoCarreras = mysqli_query($conexion, $carrerasConsulta);

            $carrerasConsulta2 = "SELECT N_Carrera FROM carrera_dos WHERE idUsuario = $idUsuario";
            $resultadoCarreras2 = mysqli_query($conexion, $carrerasConsulta2);

                if ($resultado1 && $resultado2) {
                    // Configuración de PHPMailer
                    $mail = new PHPMailer(true);

                    try {

                        // Consulta de las carreras registradas de la tabla 1
                        if ($resultadoCarreras) {
                            // Obtén las carreras registradas
                            $carreras = array();
                            while ($fila = mysqli_fetch_assoc($resultadoCarreras)) {
                                $carreras[] = $fila['N_Carrera'];
                            }
                            
                            // Configuración de PHPMailer para los correos personalizados de cada carrera
                            $mailPersonalizado = new PHPMailer(true);

                            // Configura y envía correos electrónicos según las carreras registradas
                            foreach ($carreras as $carrera) {
                                $contenidoCorreo = '';
                                $boton = '';
                                $imagen = '';
                                switch ($carrera) {
                                    case 'Industrial':
                                        $contenidoCorreo = 'Contenido personalizado para la carrera de Industrial.';
                                        $imagen = 'https://raw.githubusercontent.com/hector-14/Imagenes/main/Imagenes_Email/CorreoGastro.png'; 
                                        $boton = 'http://localhost/Difusion2/Industrial.php';
                                        break;
                                    case 'Contabilidad':
                                        $contenidoCorreo = 'Contenido personalizado para la carrera de Contabilidad.';
                                        $imagen = 'https://raw.githubusercontent.com/hector-14/Imagenes/main/Imagenes_Email/CorreoGastro.png';
                                        $boton = 'http://localhost/Difusion2/Contador_P%C3%BAblico.php';
                                        break;
                                    case 'Administración':
                                        $contenidoCorreo = 'Contenido personalizado para la carrera de Administracion.';
                                        $imagen = 'https://raw.githubusercontent.com/hector-14/Imagenes/main/Imagenes_Email/CorreoGastro.png';
                                        $boton = 'http://localhost/Difusion2/Administraci%C3%B3n.php';
                                        break;
                                    case 'Sistemas Computacionales':
                                        $contenidoCorreo = 'Contenido personalizado para la carrera de Sistemas Computacionales.';
                                        $imagen = 'https://raw.githubusercontent.com/hector-14/Imagenes/main/Imagenes_Email/CorreoGastro.png';
                                        $boton = 'http://localhost/Difusion2/Sistemas.php';
                                        break;
                                    case 'Energías Renovables':
                                        $contenidoCorreo = 'Contenido personalizado para la carrera de Energías Renovables.';
                                        $imagen = 'https://raw.githubusercontent.com/hector-14/Imagenes/main/Imagenes_Email/CorreoTICS.png';
                                        $boton = 'http://localhost/Difusion2/Energ%C3%ADas.php';
                                        break;
                                    case 'Tecnologias de la Información y Comunicación':
                                        $contenidoCorreo = 'Contenido personalizado para la carrera de Tecnologias de la Información y Comunicación.';
                                        $imagen = 'https://raw.githubusercontent.com/hector-14/Imagenes/main/Imagenes_Email/CorreoTICS.png';
                                        $boton = 'http://localhost/Difusion2/Tecnolog%C3%ADas.php';
                                        break;
                                    case 'Ambiental':
                                        $contenidoCorreo = 'Contenido personalizado para la carrera de Ambiental.';
                                        $imagen = 'https://raw.githubusercontent.com/hector-14/Imagenes/main/Imagenes_Email/CorreoGastro.png';
                                        $boton = 'http://localhost/Difusion2/Ambiental.php';
                                        break;
                                    case 'Gastronomía':
                                        $contenidoCorreo = 'Contenido personalizado para la carrera de Gastronomia.';
                                        $imagen = 'https://raw.githubusercontent.com/hector-14/Imagenes/main/Imagenes_Email/CorreoGastro.png';
                                        $boton = 'http://localhost/Difusion2/Gastronom%C3%ADa.php';
                                        break;
                                    case 'Sistemas Automotrices':
                                        $contenidoCorreo = 'Contenido personalizado para la carrera de Sistemas Automotrices.';
                                        $imagen = 'https://raw.githubusercontent.com/hector-14/Imagenes/main/Imagenes_Email/CorreoGastro.png';
                                        $boton = 'http://localhost/Difusion2/Automotrices.php';
                                        break;
                                    // Añade más casos según las carreras que tengas
                                }
                            }
                        } else {
                            echo "Error al consultar las carreras del usuario";
                        }

                        // Consulta 2 de las carreras registardas de la tabla 2
                        if ($resultadoCarreras2) {
                            // Obtén las carreras registradas
                            $carreras2 = array();
                            while ($fila2 = mysqli_fetch_assoc($resultadoCarreras2)) {
                                $carreras2[] = $fila2['N_Carrera'];
                            }
                            
                            // Configuración de PHPMailer para los correos personalizados de cada carrera
                            $mailPersonalizado2 = new PHPMailer(true);

                            // Configura y envía correos electrónicos según las carreras registradas
                            foreach ($carreras2 as $carrera2) {
                                $contenidoCorreo2 = '';
                                $boton2 = '';
                                $imagen2 = '';
                                switch ($carrera2) {
                                    case 'Industrial':
                                        $contenidoCorreo2 = 'Contenido personalizado para la carrera de Industrial.';
                                        $imagen2 = 'https://raw.githubusercontent.com/hector-14/Imagenes/main/Imagenes_Email/CorreoGastro.png'; 
                                        $boton2 = 'http://localhost/Difusion2/Industrial.php';
                                        break;
                                    case 'Contabilidad':
                                        $contenidoCorreo2 = 'Contenido personalizado para la carrera de Contabilidad.';
                                        $imagen2 = 'https://raw.githubusercontent.com/hector-14/Imagenes/main/Imagenes_Email/CorreoGastro.png';
                                        $boton2 = 'http://localhost/Difusion2/Contador_P%C3%BAblico.php';
                                        break;
                                    case 'Administración':
                                        $contenidoCorreo2 = 'Contenido personalizado para la carrera de Administracion.';
                                        $imagen2 = 'https://raw.githubusercontent.com/hector-14/Imagenes/main/Imagenes_Email/CorreoGastro.png';
                                        $boton2 = 'http://localhost/Difusion2/Administraci%C3%B3n.php';
                                        break;
                                    case 'Sistemas Computacionales':
                                        $contenidoCorreo2 = 'Contenido personalizado para la carrera de Sistemas Computacionales.';
                                        $imagen2 = 'https://raw.githubusercontent.com/hector-14/Imagenes/main/Imagenes_Email/CorreoGastro.png';
                                        $boton2 = 'http://localhost/Difusion2/Sistemas.php';
                                        break;
                                    case 'Energías Renovables':
                                        $contenidoCorreo2 = 'Contenido personalizado para la carrera de Energías Renovables.';
                                        $imagen2 = 'https://raw.githubusercontent.com/hector-14/Imagenes/main/Imagenes_Email/CorreoTICS.png';
                                        $boton2 = 'http://localhost/Difusion2/Energ%C3%ADas.php';
                                        break;
                                    case 'Tecnologias de la Información y Comunicación':
                                        $contenidoCorreo2 = 'Contenido personalizado para la carrera de Tecnologias de la Información y Comunicación.';
                                        $imagen2 = 'https://raw.githubusercontent.com/hector-14/Imagenes/main/Imagenes_Email/CorreoTICS.png';
                                        $boton2 = 'http://localhost/Difusion2/Tecnolog%C3%ADas.php';
                                        break;
                                    case 'Ambiental':
                                        $contenidoCorreo2 = 'Contenido personalizado para la carrera de Ambiental.';
                                        $imagen2 = 'https://raw.githubusercontent.com/hector-14/Imagenes/main/Imagenes_Email/CorreoGastro.png';
                                        $boton2 = 'http://localhost/Difusion2/Ambiental.php';
                                        break;
                                    case 'Gastronomía':
                                        $contenidoCorreo2 = 'Contenido personalizado para la carrera de Gastronomia.';
                                        $imagen2 = 'https://raw.githubusercontent.com/hector-14/Imagenes/main/Imagenes_Email/CorreoGastro.png';
                                        $boton2 = 'http://localhost/Difusion2/Gastronom%C3%ADa.php';
                                        break;
                                    case 'Sistemas Automotrices':
                                        $contenidoCorreo2 = 'Contenido personalizado para la carrera de Sistemas Automotrices.';
                                        $imagen2 = 'https://raw.githubusercontent.com/hector-14/Imagenes/main/Imagenes_Email/CorreoGastro.png';
                                        $boton2 = 'http://localhost/Difusion2/Automotrices.php';
                                        break;
                                    // Añade más casos según las carreras que tengas
                                }
                            }
                        } else {
                            echo "Error al consultar las carreras del usuario";
                        }
                        
                        // Configura el servidor SMTP
                        $mail->isSMTP();
                        $mail->Host = 'smtp.gmail.com'; // Cambia esto por tu servidor SMTP
                        $mail->SMTPAuth = true;
                        $mail->Username = 'skillet11real@gmail.com'; // Cambia esto por tu dirección de correo
                        $mail->Password = 'lfee jtxi dbxx tksg'; // Cambia esto por tu contraseña
                        $mail->SMTPSecure = 'tls';
                        $mail->Port = 587;

                        // Configuración del mensaje
                        $mail->setFrom('skillet11real@gmail.com', 'TESOEM');
                        $mail->addAddress($correo, $nombre . ' ' . $apellido);
                        $mail->CharSet = 'UTF-8';
                        $mail->Subject = 'Información de Carreras';
                        $mail->Body = 
                            '<!DOCTYPE html>
                            <html lang="es">
                            <head>
                                <link rel="preconnect" href="https://fonts.googleapis.com">
                                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                                <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Raleway:wght@300;400&display=swap" rel="stylesheet">
                                <title>Correo</title>';
                        $mail->Body .= '
                                <style>
                                *{
                                    margin: 0;
                                    padding: 0;
                                    box-sizing: border-box;
                                }
                            
                                #tabla1{
                                    border-bottom: 2px solid rgba(10, 10, 10, 0.8);
                                }
                                .cuerpo{
                                    width: 80%;
                                    min-height: auto;
                                    padding: 20px;
                                    margin: 0px auto;
                                    background-size: cover;
                                    text-align: center;
                                    background-color: #f1f1f1;
                                    /* position: relative*/
                                }
                            
                                .cuerpo img{
                                    width: 100%;
                                    display: block;
                                }
                            
                                .cuerpo .Bienvenido{
                                    text-align: center;
                                    font-family: "Montserrat", sans-serif;
                                    font-size: 1.2em;
                                    background-color: rgb(255, 255, 255);
                                }
                            
                                .cuerpo .Bienvenido h1{
                                    margin-bottom: 3%;
                                }
                            
                                .cuerpo .Bienvenido span{
                                    font-family: "Raleway", sans-serif;
                                    margin-top: -4px; 
                                }
                            
                                .cuerpo .Bienvenido p{
                                    font-family: "Montserrat", sans-serif;
                                    font-size: 16px;
                                    padding: 10px;
                                }
                            
                                .cuerpo .link{    
                                    display: flex;
                                    padding: 15px 40px;
                                    justify-content: center;
                                    align-items: center;
                                }
                            
                                .cuerpo .link a{
                                    background-color: white;
                                    text-decoration: none;
                                    color: black;
                                    padding: 10px 20px;
                                    font-size: 20px;
                                    font-family: "Montserrat", sans-serif;
                                    border-radius: 10px;
                                    box-shadow: 0px 5px 5px #06b706;
                                }
                            
                                .cuerpo .link a:hover{
                                    background-color: #06b706;
                                    color: #ffffff;
                                    transform: scale(0.9);
                            
                                }
                            
                                .cuerpo .footer{
                                    background-color: rgb(255, 255, 255);
                                }
                            
                                .cuerpo .footer h1{
                                    font-family: "Montserrat", sans-serif;
                                    font-size: 1.7em;
                                    padding: 10px;
                                }
                            
                                .cuerpo .footer .contacto{
                                    display: flex;
                                    justify-content: center;
                                    align-items: center;
                                }
                            
                                .cuerpo .footer .contacto img{
                                    width: 40px;
                                }
                                </style>';
                        $mail->Body .='
                            </head>
                            <body>
                                <div class="cuerpo">
                                    <table id="tabla1" style="max-width: 600px; padding: 10px; margin:0 auto; border-collapse: collapse;">
                                        <tr>
                                            <td style="padding: 0px;">
                                                <img src="https://raw.githubusercontent.com/hector-14/Imagenes/main/Imagenes_Email/EmailP1.png" alt="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="background-color: rgb(249, 249, 249);">
                                                <div class="Bienvenido">
                                                    <h1>Bienvenido</h1>
                                                    <span><strong>'.$nombre.' '.$apellido.'</strong></span>
                                                </div>    
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="background-color: rgb(249, 249, 249);">
                                                <div class="Bienvenido">
                                                    <p>!No detengas tus sueños¡ Descubre lo que tenemos para ti</p>
                                                    <p>- Becas Academicas de acuerdo al aprovechamiento academico</p>
                                                    <p>- Planes de actualizados y adecuados al mercado laboral</p>
                                                    <p>- Equipo especializado y laboratorios con la última tecnología</p>                      
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0;">
                                                <img src="https://raw.githubusercontent.com/hector-14/Imagenes/main/Imagenes_Email/EmailP2.png" alt="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="background-color: rgb(249, 249, 249); padding-top: 5px;">
                                                <div class="Bienvenido">
                                                    <p>¡Queremos ayudarte con tus dudas!</p>
                                                </div>
                                                <div class="link" style="background-color: rgb(255, 255, 255);">
                                                    <a href="http://localhost/Difusion2/index.php">Visitanos</a>
                                                </div>
                                                <div class="Bienvenido">
                                                    <p>ó</p>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="footer">
                                                    <h1>Contactanos</h1>
                                                    <div class="contacto">
                                                        <a href="https://www.facebook.com/TESOEMOficial"><img src="https://raw.githubusercontent.com/hector-14/Imagenes/main/Imagenes_Email/facebook4.png" alt=""></a>
                                                        <a href="https://twitter.com/tesoem"><img src="https://raw.githubusercontent.com/hector-14/Imagenes/main/Imagenes_Email/twitter3.png" alt=""></a>
                                                        <span>5559863497</span>
                                                    </div>   
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                            
                                    <table id="tabla2" style="max-width: 600px; padding: 10px; margin:5px auto; border-collapse: collapse;">
                                        <tr>
                                            <td style="padding: 0;">
                                            <img src="'.$imagen.'" alt=""> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="background-color: rgba(3, 3, 3, 0.9);">
                                                <div class="link">
                                                    <a href='. $boton .'>Conoce más</a>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                            
                                    <table id="tabla3" style="max-width: 600px; padding: 10px; margin:5px auto; border-collapse: collapse;">
                                        <tr>
                                            <td style="padding: 0;">
                                            <img src="'. $imagen2 .'" alt=""> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="background-color: rgb(17 30 43 / 80%);">
                                                <div class="link">
                                                    <a href='. $boton2 .'>Conoce más</a>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </body>
                            </html>';
                        $mail->isHTML(TRUE);
                        
                        // Enviar el correo principal
                        $mail->send();
                        echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
                        echo '<script src="javascript/Insertar_Alert.js"></script>';

                    } catch (Exception $e) {
                        echo "Error al enviar el correo: {$mail->ErrorInfo}";
                    }
                } else {
                    echo "Error al agregar los datos de las carreras";
                }

            

        } else {
            echo "Error, no se agregó ningún dato del usuario";
        }
    }
} else {
    echo "Algo salió mal";
}
?>
