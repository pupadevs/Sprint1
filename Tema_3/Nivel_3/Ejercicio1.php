<?php
echo "<left><h2><b>" . "Ejercicio 1" .  "</b></h2></left>";

//Escribe un programa en PHP para convertir una cadena en un array (recortando cada carácter y eliminando las líneas vacías).
$hola = "Hola mundo";
$num = 5;

print_r (convertiraArray($hola));
function convertiraArray($cadena) {
    if (is_string($cadena)) {
        $array = str_split($cadena); //convierte cadena en array de caracteres
        $array = array_filter($array, function($valor) { //Funcion anonima para devolver lo no sea un espacio
            return $valor !== " ";
        });
        return $array;
    }
}
?>