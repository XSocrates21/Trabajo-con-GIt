<?php  //etiqueta de apertura de php

// Comentarios de una sola linea

/* 
Este es un 
comentario multilinea 
*/

//Para declarar una variable es con el $
$nombre;

//Asignar una variable 
$nombre = "Edgar";

// String o cadenas de texto
$nombre = "Luis";
$segundoNombre = 'Fernando';

// Númerico entero
$edad = 15;

// Flotante o con punto decimal
$precio = 32.5;

// Booleanos
$activo = true;
$inactivo = false;


// Arreglo

$colores = array("Blanco", "Negro", "Azul");

// Objetos

class Persona
{
    public $nombre;
    public $edad;
}

$persona = new Persona;
$persona->nombre = "Luis";
$persona->edad = 32;

echo "Hola mi nombres es {$nombre} $segundoNombre mi edad es de {$edad} años,
hoy entre al curso de php y me costo $$precio";

// TODO: Implementar la función de validación de correo electrónico

// //: Corregir el bug en la función de cálculo de impuestos

// * Este comentario destaca información importante

// ? ¿Es necesario incluir esta variable en el bucle?

// ! Cuidado: Esta sección de código es propensa a errores

// cierre de la etiqueta ?>







