<?php
class Triangle extends Shape {
   public function __construct($anchura, $altura ){
    parent::__construct($anchura, $altura);
   }
    public function area(){
         
             return ($this->anchura * $this->altura) / 2;
         }
     }