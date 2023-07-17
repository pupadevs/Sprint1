<?php

echo "<left><h2><b>" . "Ejercicio 3" .  "</b></h2></left>";
//Elimina un elemento del array anterior. Después de eliminar el elemento, las claves enteras deben ser normalizadas.
$arrayNums = array (10, 20, 30, 40, 50);
print_r($arrayNums);
unset($arrayNums[3]);
print_r($arrayNums);
$arrayNormalizado = array_values($arrayNums);
print_r($arrayNormalizado);



?>