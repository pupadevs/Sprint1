<?php
//Juego del escondite con cuenta parametrizada
$num = 80;
echo "Juego deel escondite, empiexo a contar" . "<br>";
function escondite($num){
    $limite = 10;
    for($i = 0; $i <= $num ; $i+=2){ //Ciclo for para contar de 2 en 2 i = 0, si i <= limite, incrementador i+=2
        echo "Numero " . $i . "<br>";
      }
}
escondite($num);



?>