<?php

    $servidor = "localhost";
    $nombreusuario = "root";
    $password = "";
    $database = "Propi3dad";

    $conexion = new mysqli($servidor, $nombreusuario, $password, $database);

    if($conexion -> connect_error){
        die("Conexion fallida: " . $conexion -> connect_error);
    }

    /*
    $sql = "CREATE DATABASE Propi3dad";
    if($conexion -> query($sql) === true){
        echo "Base de datos creadas correctamente";
    }else{
        die("Error en la creacion de base de datos");
    }
    */

    $sql = "CREATE TABLE usuarios(
        id INT(7) AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(100) NOT NULL,
        email VARCHAR(50) NOT NULL,
        celular INT(11),
        password VARCHAR(40) NOT NULL
    )";

    if($conexion -> query($sql) === true){
        echo "La tabla se creo correctamente";
    }


?>