<?php
$cantChocolate = 3;
$cantCaramelo = 5;
$cantChicle = 6;

 $precioTotal = chicles($cantChicle);
 echo "El total de su compra es:" . chicles($cantChicle) + caramelo($cantCaramelo) + chocolate($cantChocolate). "€" ;
function chicles($cantChicle){
    $precioChicle = 0.50;
    $total = $cantChicle * $precioChicle;
    return $total;
}
function caramelo($cantCaramelo){
    $precioCaramel = 1.50;
    $total = $cantCaramelo * $precioCaramel;
    return $total;
}

function chocolate($cantChocolate){
    $precioChocolate = 1;
    $total = $cantChocolate * $precioChocolate;
    return $total;
}