<?php
//Juego del escondite con parametro por defecto de 10
echo "Juego deel escondite, empiezo a contar" . "<br>";

function escondite($limite = 10){
    $num = 0;
   while($num <= $limite){
    echo "Numero $num". PHP_EOL;
    $num++;

   }echo "El escondiste donde estas";
}
escondite();
?>