<?php
echo "<left><h2><b>" . "Ejercicio 2" .  "</b></h2></left>";
//Escribe un programa en PHP que cuenta el número total de veces que un valor existe en el array
$nums = array(1, 2, 3, 4, 2, 5, 6, 2, 7, 8, 2, 9, 2);
$nombres = array("Jose", "Juan", "Pedro", "Juan", "Pedro", "Juan", "Jose");

$rep2 = array_count_values($nombres);
$rep = array_count_values($nums); //array count cuenta el numero de veces que un valor se repite y lo almaceno en la var $rep
print_r($nums);
foreach ($rep as $nums => $veces) { //for each donde recorre
    echo "$nums se repite $veces veces <br>";
}
   foreach ($rep2 as $nombres => $veces2) {
     echo "Este nombre: $nombres se repite $veces2 veces <br>";
   }


   

?>