<?php
//Ejercicio 3: Evaluación de notas

$calificacion = 99;

if ($calificacion >= 100){
    echo "Aprobo con una nota de A";
}elseif ($calificacion >= 90){
    echo "Aprobo con una nota de B";
}elseif ($calificacion >= 80){
    echo "Aprobo con una nota C";
}else{
    echo "No aprobo la materia";
}