<?php
class PokerDice {
    
private $valor;
private array $tiradas;
private $numeroTiradas = 0;
   


        public function tirar(){
        $carasDado  = array("As", "K", "Q", "J","7", "8" );
       $this->valor = $carasDado[rand(0,5)];
       $this->numeroTiradas++;
    
    //  $this->shapeName($i);
     
     $this->guardarTirada($this->valor);

        return $this->valor;
        
    }
    public function ultimaTirada(){
        if (!empty($this->tiradas)) {
            return end($this->tiradas);
        }
        return null;
    }

    public function guardarTirada($tirada){
       $this->tiradas[] = $tirada;
    }
  
     public function getTotalThrows(){
        return $this->numeroTiradas;
    }
   
}




?>