<?php

echo "<left><h2><b>" . "Ejercicio 3" .  "</b></h2></left>";
//Elimina un elemento del array anterior. Después de eliminar el elemento, las claves enteras deben ser normalizadas.
$arrayNums = array (10, 20, 30, 40, 50);
$valor = 30;
$cadena ="hola";
print_r(eliminarelementoArray($cadena, $valor));


function eliminarelementoArray($array, $valor){
    if(is_array($array)){
for ($i=0; $i < count($array); $i++) { //count para iterar sobre todo el array
    if ($array[$i] == $valor) { //si la posicion "i" de la var $X es igual a 40
        unset($array[$i]); //borro con unset la posicion "i" de la var X
        return $nuevoArray = array_values($array);     //Array values sirver para normalizar las claves enteras "Posicion en la memorias
    }
}
    }else{
        return "No hay un aaray dentro de los parametros";
    }

}
?>