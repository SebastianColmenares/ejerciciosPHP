<?php
$nombre = "Emiliano Sebastian Colmenares Diaz";
echo "$nombre <br>" ;

// Numero de caracteres
$cantidadCaracteres = strlen($nombre);
echo "Numero de caracteres en el nombre: " . $cantidadCaracteres . "<br>";

// Convertir a mayuscula
$nombreMayusculas = strtoupper($nombre);
echo "Nombre en mayusculas: " . $nombreMayusculas . "<br>";

// Al reves
$nombreReves = strrev($nombre);
echo "Nombre al reves: " . $nombreReves . "<br>";
?>
