<?php
//Programa una funcion que, dado un numero cualquiera(por ejemplo tu edad)nos diga si es par o impar mediante un mensaje por pantalla
$num = 32;
echo "<h2><b>". $num . "</b></h2>"."<br>";

function numPar($num){
if($num % 2 == 0){
    echo   "<b>" ." Este numero es par" . "</b>";
}else{
    echo "No es par";
}
}
 numPar($num); //llamando funcion


?>