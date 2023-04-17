<?php
//Juego del escondite con parametro por defecto de 10
echo "Juego deel escondite, empiezo a contar" . "<br>";
$limite = 10;
function escondite($limite){
    
    for($i = 0; $i <= $limite ; $i+=2){ //Ciclo for para contar de 2 en 2 i = 0, si i <= limite, incrementador i+=2
        echo "Numero " . $i . "<br>";
      }
}
echo escondite($limite);
?>