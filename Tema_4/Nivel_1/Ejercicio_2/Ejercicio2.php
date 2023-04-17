<?php

abstract class Shape  {
    protected $anchura;
    protected $altura;
    
    public function __construct($altura, $anchura) {
        $this->anchura = $anchura;
        $this->altura = $altura;
    }
    abstract function area();
}

class Triangle extends Shape {
   public function area(){
        
            return ($this->anchura * $this->altura) / 2;
        }
    }


class Rectangle extends Shape {
    public function area() {
        return $this->anchura * $this->altura;
    }
}

// Crear objetos
$triangulo = new Triangle(10, 5);
$rectangulo = new Rectangle(10, 5);

// Calcular areas
echo "El área del triángulo es: " . $triangulo->area() . "\n";
echo "El área del rectángulo es: " . $rectangulo->area() . "\n";
?>