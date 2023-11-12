<?php
//Ejercicio 4: Verificación de usuario y contraseña
$usuario = "usuario123";
$contrasena = "clave456";

$usuarioIngresado = "usuario123";
$contrasenaIngresada = "clave456";

if ($usuarioIngresado == $usuario && $contrasenaIngresada == $contrasena) {
    echo "Inicio de sesión exitoso.";
} else {
    echo "Usuario o contraseña incorrectos.";
}
