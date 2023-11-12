<?php
//Problema 1: Determinar el número más grande
$num1 = 10;
$num2 = 25;
$num3 = 15;

if ($num1 >= $num2 && $num1 >= $num3) {
    echo "El número más grande es: $num1";
} elseif ($num2 >= $num1 && $num2 >= $num3) {
    echo "El número más grande es: $num2";
} else {
    echo "El número más grande es: $num3";
}