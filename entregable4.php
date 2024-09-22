<?php
$num1 = 15;
$num2 = 6;

echo "Suma de $num1 + $num2: " . ($num1 + $num2) . "<br>"; 
echo "Resta de $num1 - $num2: " . ($num1 - $num2) . "<br>"; 
echo "Multiplicacion de $num1 * $num2: " . ($num1 * $num2) . "<br>"; 
echo "Division de $num1 / $num2: " . ($num1 / $num2) . "<br>"; 
echo "Modulo de $num1 % $num2: " . ($num1 % $num2) . "<br>"; 

echo "¿Es $num1 mayor que $num2? " . ($num1 > $num2 ? 'si' : 'no') . "<br>";
echo "¿Es $num1 menor que $num2? " . ($num1 < $num2 ? 'si' : 'no') . "<br>";
echo "¿Es $num1 mayor o igual a $num2? " . ($num1 >= $num2 ? 'si' : 'no') . "<br>";
echo "¿Es $num1 menor o igual a $num2? " . ($num1 <= $num2 ? 'si' : 'no') . "<br>";
echo "¿Son $num1 y $num2 iguales? " . ($num1 == $num2 ? 'si' : 'no') . "<br>";
echo "¿Son $num1 y $num2 diferentes? " . ($num1 != $num2 ? 'si' : 'no') . "<br>";

$esMayor = $num1 > $num2;
$esIgual = $num1 == $num2;

echo "¿Es $num1 mayor que $num2 y son iguales? " . ($esMayor && $esIgual ? 'si' : 'no') . "<br>";
echo "¿Es $num1 mayor que $num2 o son iguales? " . ($esMayor || $esIgual ? 'si' : 'no') . "<br>";
echo "¿No es cierto que $num1 y $num2 son iguales? " . (!$esIgual ? 'si' : 'no') . "<br>";
?>
