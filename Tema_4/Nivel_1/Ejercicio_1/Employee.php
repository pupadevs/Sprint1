<?php
Class Employee {
    private $nom;
    private $sueldo;
    public function imprimir($nom, $sueldo){
    echo "Hola soy el empleado ". $nom . " con un sueldo de " . $sueldo . "<br>";
    }
    public function imprimir2($nom, $sueldo){
        if($sueldo > 6000){
            echo "Tienes que pagar impuestos, tu sueldo: ". $sueldo . " supera los 6000 " ;
        }
        
        }
    }