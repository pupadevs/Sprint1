<?php
echo "Se repiten " . $rep . " veces.";
echo "<left><h2><b>" . "Ejercicio 3" .  "</b></h2></left>";
//Elimina un elemento del array anterior. Después de eliminar el elemento, las claves enteras deben ser normalizadas.
$X = array (10, 20, 30, 40, 50);
print_r($X);
echo "<br>";
for ($i=0; $i < count($X); $i++) { //count para iterar sobre todo el array
    if ($X[$i] == 40) { //si la posicion "i" de la var $X es igual a 40
        unset($X[$i]); //borro con unset la posicion "i" de la var X
    }
}
$X = array_values($X); //Array values sirver para normalizar las claves enteras "Posicion en la memorias"
print_r($X); //Imprimimos por pantalla
?>