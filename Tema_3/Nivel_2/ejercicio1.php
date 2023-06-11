<?php
//Escribir un programa PHP para calcular la suma de los dos valores enteros dados. Si ambos valores son iguales, devuelve el doble de su suma.
$num1 =7;

$num2 = 7;
echo calcularSuma($num1, $num2);

function calcularSuma($num1,$num2){
    $total = $num1 + $num2;
    if($num1 == $num2){
        return $total *2;  
    }

}
