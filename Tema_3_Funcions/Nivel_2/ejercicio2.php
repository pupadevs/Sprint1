<?php
//Escribe una función que determine la cantidad total a pagar por una llamada telefónica según las siguientes premisas: Toda llamada que dure menos de 3 minutos tiene un coste de 10 céntimos. Cada minuto adicional a partir de los 3 primeros es un paso de contador y cuesta 5 céntimos.
$minutos = 20;

function telefonica($minutos){
    $total = 0;
    $cost = 0.10;
    $cost2 = 0.05;
    $limite = 3;
    if($minutos  < $limite){
       
        $total = $minutos * $cost;
        echo "El coste total de la llamada es: " . $total;
    }else {
        $total = $minutos * $cost2;
       
        echo "El coste total de esta llamada es:$total €";
    }
} 
 telefonica($minutos);

?>