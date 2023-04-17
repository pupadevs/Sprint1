<?php
class Rectangle extends Shape {
    public function area() {
        return $this->anchura * $this->altura;
    }
}