<?php
    $numAleatorio = rand(1,100);
    echo"Numero aleatorio generado: $numAleatorio <br>";
    if ($numAleatorio > 50) {
        echo "El numero es mayor que 50";
    } elseif ($numAleatorio < 50) {
        echo "El numero es menor que 50";
    } else {
        echo "El numero es igual a 50";
    }
?>