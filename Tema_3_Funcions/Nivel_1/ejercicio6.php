<?php
//Charlie me mordió el dedo!
//Charlie te morderá el dedo exactamente el 50% del tiempo.
//Escribe La función isBitten ()que devuelve TRUE  con un 50% de probabilidad y FALSE de lo contrario.
function meMuerde(){
$aleatorio = rand(1, 2); //funcion rand para numero aleatorio
$muerde = ($aleatorio != 1) ? "Me muerde" : "No me Muerde"; // operador ternario para determinar si muerde o no muerde con aleatorio con funcion rand
echo $muerde;
}
meMuerde();
?>