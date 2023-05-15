<?php


// Crear objetos
$triangulo = new Triangle(10, 5);
$rectangulo = new Rectangle(10, 5);

// Calcular areas
echo "El área del triángulo es: " . $triangulo->area() . "\n";
echo "El área del rectángulo es: " . $rectangulo->area() . "\n";
?>