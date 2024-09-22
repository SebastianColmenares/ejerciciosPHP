<?php
$int = 10;         
$float = 5.75;  

// Paso 2 Tipo de dato 
echo "Tipo de dato de $int: " . gettype($int) . "<br>"; 
echo "Tipo de dato de $float: " . gettype($float) . "<br>";

// Paso 3 Operacion matematica simple
$sum = $int + $float;
echo "Resultado de la suma de $int + $float = " . $sum . "<br>"; 

// Paso 4 multiplicar por 10
$multiplyInt = $int * 10;
$multiplyFloat = $float * 10;

echo "Multiplicacion de $int por 10: " . $multiplyInt . "<br>";
echo "Multiplicacion de $float por 10: " . $multiplyFloat . "<br>";
?>