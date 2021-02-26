<?php
    // caracter
    $letra = "c";
    // entero
    $numero = 7;
    // cadena
    $cadena = "Mi nombre es Jonathan";
    // flotante
    $decimal = 3.1416;
    // booleano
    $verdadero = true;
    $falso = false;
    // arreglo
    $carros = array("chico", "camión", "deportivo");
    $edad = array(12,2,6,23);
    // nulos
    $nada = null;
    
    /* agregar html */
    echo $cadena . "<br>";
    echo $decimal . "<br>";
    /* imprimir arreglo, no se puede con echo */
    print_r($carros);
    print_r($edad);
?>