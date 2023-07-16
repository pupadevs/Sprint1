<?php
//Escribir un programa PHP para calcular la suma de los dos valores enteros dados. Si ambos valores son iguales, devuelve el doble de su suma.
$num1 =7;

$num2 = 4;
echo calcularSuma($num1, $num2);

function calcularSuma(  $num1, $num2){
    if(is_integer($num1) && is_integer($num2)){
    $total = $num1 + $num2;
    if($num1 == $num2){
        return $total *2;  
    }else{
        return "Los valores no son iguales";
    }
    }else{
        return  "No es un entero el dato introducido";
    }
}
