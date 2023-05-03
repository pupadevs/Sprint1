<?php
include_once("Pokerdice.php");
$juego = new PokerDice();

$v = 0;
$juego->tirar();
$valor = $juego->tirar();
for ($i=0; $i <6 ; $i++) { 
    
    $juego->tirar();
}
$juego->tirar();
$juego->shapeName($valor);
echo "<br>Han sido un toal de: ".$juego->getTotalThrows() ." tiradas";