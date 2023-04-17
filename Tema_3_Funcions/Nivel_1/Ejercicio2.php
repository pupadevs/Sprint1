<?php
//Juego del escondite contando de 2 en 2 hasta 10
echo "Juego de el escondite, empiezo a contar" . "<br>";
function escondite(){
   // $limite = 10;
    for($i = 0; $i <= 10 ; $i+=2){ //Ciclo for para contar de 2 en 2 i = 0, si i <= limite, incrementador i+=2
        echo "Numero " . $i . "<br>";
      }
}
escondite();
?>