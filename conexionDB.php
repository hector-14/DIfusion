<?php
    session_start();
    $db_host = $_ENV["db_host"];
    $db_user = $_ENV["db_user"];
    $db_password = $_ENV["db_password"];
    $db_name = $_ENV["db_name"];
    $db_port = $_ENV["db_port"];
    $conexion = mysqli_connect("$db_host","$db_user","$db_password","$db_name","$db_port"); 
?>
