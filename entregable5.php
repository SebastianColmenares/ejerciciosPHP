<?php
$correo = "test_user@example.com";
echo "El correo es: $correo <br>";

$patronCorreo = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";

if (preg_match($patronCorreo, $correo)) {
    echo "El correo es valido<br>";
} else {
    echo "El correo no es valido<br>";
}

$posicionArroba = strpos($correo, '@');  
$nombreUsuario = substr($correo, 0, $posicionArroba); 
echo "El nombre de usuario es: $nombreUsuario<br>";
?>
