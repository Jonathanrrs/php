<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: #121212;
            color: white;
        }
    </style>
</head>
<body>
    <?php
        $frutas = array("platano", "manzana", "uvas", "fresas");
        print_r($frutas);
        echo $frutas[1];
        echo "<br>";
        echo count($frutas) . " elementos";
        echo "<br>";
        
        for($bandera=0; $bandera < count($frutas); $bandera++) {
            echo $frutas[$bandera] . "<br>";
        }
        /* se le asigna un key y un valor, tipo array de ob jetos */
        $edades = array("Jonathan" => 21, "ramiro" => 7);
        print_r($edades);
        echo "<br>";
        echo $edades["ramiro"];
        echo "<br>";

        /* foreach */
        /* arreglo asociativo */
        foreach($edades as $key => $value) {
            echo $key . " tiene el valor de " . $value . "<br>";
        }
    ?>
</body>
</html>