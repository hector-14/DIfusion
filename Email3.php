<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Raleway:wght@300;400&display=swap" rel="stylesheet">
    <title>Correo2</title>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .cuerpo{
        width: 80%;
        min-height: auto;
        padding: 20px;
        margin: 0px auto;
        background-size: cover;
        text-align: center;
        background-color: #f1f1f1;
    }

    .cuerpo img{
        width: 100%;
        display: block;
    }

    .cuerpo .bienvenido{
        text-align: center;
        margin: 3% 10%;
        font-family: "Montserrat", sans-serif;
        font-size: 1.2em;
    }

    .cuerpo .Bienvenido span{
        font-family: "Raleway", sans-serif;
        margin-top: -4px; 
    }
    .cuerpo .link{    
        display: flex;
        padding: 15px 40px;
        background-color: rgb(255, 255, 255);
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
</style>
</head>
<body>
    <div class="cuerpo">
        <table style="max-width: 600px; padding: 10px; margin:0 auto; border-collapse: collapse;">
            <tr>
                <td style="background-color: rgb(255, 255, 255); padding: 0;">
                    <img src="https://raw.githubusercontent.com/hector-14/Imagenes/main/Imagenes_Email/TESOEM.png" alt="" style="width: 42%; margin-left: auto; margin-right: auto;">
                </td>
            </tr>
            <tr>
                <td style="background-color: rgb(255, 255, 255);">
                    <div class="bienvenido">
                        <span><strong>' . $nombre . ' ' . $apellido . '</strong></span>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="padding: 0;">
                   <img src="https://raw.githubusercontent.com/hector-14/Imagenes/main/Imagenes_Email/CorreoTICS.png" alt=""> 
                </td>
            </tr>
            <tr>
                <td style="background-color: rgb(255, 255, 255);">
                    <div class="bienvenido">
                        <span>¿Quieres saber más?</span>
                    </div>
                    <div class="link">
                        <a href='. $boton .'>Visita</a>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>