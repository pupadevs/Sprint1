<?php
echo "<left><h2><b>" . "Ejercicio 1" .  "</b></h2></left>";

//Escribe un programa en PHP para convertir una cadena en un array (recortando cada carácter y eliminando las líneas vacías).
$hola = "Hola mundo";
echo $hola;
$arrayCaracter = str_split($hola); //str split conviert una cadena en un array de caracter
print_r($arrayCaracter);
?>