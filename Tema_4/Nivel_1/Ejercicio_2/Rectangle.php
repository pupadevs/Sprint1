<?php
class Rectangle extends Shape {
    //Constructor
    public function __construct($anchura, $altura ){
        parent::__construct($anchura, $altura);
       }
       //method
    public function area() {
        return $this->anchura * $this->altura;
    }
}
?>