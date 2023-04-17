<?php
echo "<left><h2><b>" . "Ejercicio 2" . "</b></h2></left>";
//Imprimir por pantalla "Hello, World!" utilizando una variable. Luego: Convierte todos los caracteres del string a mayúsculas e imprime en pantalla. Imprime por pantalla el tamaño (longitud) de la variable. Imprime por pantalla el string en orden inverso de caracteres. Crea una nueva variable con el contenido "Este es el curso de PHP" e imprime por pantalla la concatenación de ambos strings.
$hola = "Hola mundo";
$curso = "<b> Aques es el curs de PHP </b>";
$cadena2 = "El texto en mayuscula ". strtoupper($hola)."<br>"; //strtoupper para mayuscula "str tienes mas opciones para ejecutar mas funciones"
$longi = strlen($hola); //strlen para medir la longitud de una var
$inverso = strrev($hola); //strrev para inverso

echo $cadena2. "<br>";
echo $longi . "<br>";
echo $inverso. "<br>";
echo $hola . $curso ;
?>