<?php
include_once("Poketiradas.php");
$juego = new PokerDice();


$juego->tirar();
echo "La ultima tirada fue:". $juego->ultimaTirada() . PHP_EOL;
$juego->tirar();
echo "La ultima tirada fue:". $juego->ultimaTirada() . PHP_EOL;
$juego->tirar();
echo "La ultima tirada fue:". $juego->ultimaTirada() . PHP_EOL;

//$valor = $juego->tirar();

echo "Numero total de tiradas " . $juego->getTotalThrows(). PHP_EOL;

//$juego->shapeName($valor);
function realizarTiradas() {
    $tiradas = [];
    for ($i = 0; $i < 5; $i++) {
        $tirada = new PokerDice();
        $tirada->tirar();
        $tiradas[] = $tirada->ultimaTirada();
    }
    return $tiradas;
}

// Ejemplo de uso
$resultados = realizarTiradas();
echo "Resultados de las 5 tiradas: " . implode(", ", $resultados);

