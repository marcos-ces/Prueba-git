<?php
    
    define("KEY","panini_bar");
    define("COD","AES-128-ECB");


    $servidor = 'localhost';
    $usuario = 'root';
    $contraseña = '1234';
    $baseDeDatos = 'panini_bar';
    

    try {
        $conexion = new PDO("mysql:host=$servidor;dbname=$baseDeDatos", $usuario, $contraseña);
        // Configurar PDO para que lance excepciones en caso de error
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $ex) {
        echo $ex->getMessage();
    }

 

?>