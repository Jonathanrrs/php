<?php
    // Funciones para strings
    $mensaje = "Hoy voy aprender php";

    // longitud
    echo strlen($mensaje);
    echo "<br>";
    // Número de palabras
    echo str_word_count($mensaje);
    echo "<br>";
    // reverse
    echo strrev($mensaje);
    echo "<br>";
    // encontrar texto
    echo strpos($mensaje, "php");
    echo "<br>";
    // reemplazar texto
    echo str_replace("php", "react", $mensaje);
    echo "<br>";
    // convertir a minusculas
    echo strtolower($mensaje);
    echo "<br>";
    // convertir a mayusuculas
    echo strtoupper($mensaje);
    echo "<br>";
    // comparar cadenas, da el resultado por el valor de distancia de bytes
    echo strcmp("hola", "adios");
    echo "<br>";
    // substraer cadena
    echo substr($mensaje, 17);
    echo "<br>";
    // remover espacios en blanco
    echo trim("hola    a     todos que    tal");
?>