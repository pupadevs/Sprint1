<?php
echo "<left><h2><b>" . "Ejercicio 5" . "</b></h2></left>";
//Crea dos arrays, uno que incluya 5 integers, y otro que incluya 3 integers.Añade un valor más al array que contiene 3 integers. Mezcla los dos arrays e imprime el tamaño del array resultante por pantalla. Ahora imprime por pantalla el array resultando valor a valor.
$numeros = array(4, 5, 7);
$numeros2 = array(3, 4 ,6, 7, 10);
array_push($numeros, 90); //añadir valor a array
print_r($numeros);
echo "<br>";
print_r($numeros2);
echo "<br>";
$numerosMezcla = array_merge($numeros, $numeros2); //Mezcla uno o mas array
var_dump($numerosMezcla); //imprimir array

?>