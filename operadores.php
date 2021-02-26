<?php
    $x = 5;
    $y = 10;

    echo $x + $y;
    echo "<br>";
    echo $x - $y;
    echo "<br>";
    echo $x * $y;
    echo "<br>";
    echo $x / $y;
    echo "<br>";

    echo $x % $y;
    echo "<br>";

    /* elevado */
    echo $x ** $y;
    echo "<br>";

    /* operadores asignacion */
    $x = $y;
    
    $x += $y;
    /* $x = $x + $y */
    echo $x;
    echo "<br>";
    var_dump($x == $y);
    echo "<br>";
    var_dump($x > $y);
    /* diferentes */
    var_dump($x <> $y);
    echo "<br>";
    /* operadores incremento, decremento */

    echo $x++;
    echo "<br>";
    echo --$x;

?>