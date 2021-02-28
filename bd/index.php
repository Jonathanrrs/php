<?php
    /* conexion a bd */

    $servidor = "localhost";
    $nombreUsuario = "root";
    $password = "jonathanrrs12";
    $db = "todoListDB";
    /* crear la conexion */
    $conexion = new mysqli($servidor, $nombreUsuario, $password, $db);
    /* -> para abrir las propiedades de un objeto, como conexion.crear en js */
    if($conexion -> connect_error) {
        die("Conexión fallida: ". $conexion-> connect_error);
    }
    /* crear base de datos */
    // $sql = "CREATE DATABASE todoListDB";

    // if($conexion -> query($sql) === true) {
    //     echo "Base de datos creada correctamente";
    // } else {
    //     die("Error al crear base de datos: ". $conexion ->error);
    // }

    $sql = "CREATE TABLE todoTable(
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        texto VARCHAR(100)NOT NULL,
        completado BOOLEAN NOT NULL,
        timestamp TIMESTAMP
    )";

    if($conexion->query($sql) === true) {
        echo "La tabla se creó correctamente";
    } else{
        die("Error al crear la tabla: ". $conexion->error);
    }

   
?>