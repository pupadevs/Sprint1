<?php
abstract class Shape{
    private $altura;
    private $achura;

    public function __construct($altura, $anchura){
       $this->altura = $altura;
       $this->achura  = $anchura;

    }

    abstract function area();
}