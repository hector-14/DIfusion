<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Raleway:wght@300;400&display=swap" rel="stylesheet">
    <title>Correo</title>
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
    </style>
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
                   <img src="https://raw.githubusercontent.com/hector-14/Imagenes/main/Imagenes_Email/CorreoTICS.png" alt=""> 
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
                   <img src="https://raw.githubusercontent.com/hector-14/Imagenes/main/Imagenes_Email/CorreoGastro.png" alt=""> 
                </td>
            </tr>
            <tr>
                <td style="background-color: rgb(17 30 43 / 80%);">
                    <div class="link">
                        <a href='. $boton .'>Conoce más</a>
                    </div>
                </td>
            </tr>
        </table>

        

    </div>
</body>
</html>