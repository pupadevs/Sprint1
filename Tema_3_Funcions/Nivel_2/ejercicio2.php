<?php
//Escribe una función que determine la cantidad total a pagar por una llamada telefónica según las siguientes premisas: Toda llamada que dure menos de 3 duracionLllamada tiene un coste de 10 céntimos. Cada minuto adicional a partir de los 3 primeros es un paso de contador y cuesta 5 céntimos.
$minutos = 3;

function telefonica($duracionLllamada){
    $total = 0;
    $costeInicial = 0.10;
    $costeAdicional = 0.05;
    $limite = 3;
    if($duracionLllamada  > $limite){
        $total = $costeInicial + $duracionLllamada * $costeAdicional;
        echo "El coste total de esta llamada es:$total €";
       
    }else {
        $total += $costeInicial;
        $totalFormat = number_format($total, 2);
        echo "El coste total de la llamada es:  $totalFormat €";
       
       
    }
} 
 telefonica($minutos);

?>