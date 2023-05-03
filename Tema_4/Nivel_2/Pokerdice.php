<?php
class PokerDice {
    
private $valor;
private $tiradas = 0;
   


        public function tirar(){
        $carasDado  = array("As", "K", "Q", "J","7", "8" );
       $this->valor = $carasDado[rand(0,5)];
       $this->tiradas++;
    
    //  $this->shapeName($i);
     
     

        return $this->valor;
        
    }
  
    public function shapeName($dato){
     echo "<tab>En la tirada pasada salio el $dato</tab>";

        
    }  public function getTotalThrows(){
        return $this->tiradas;
    }
   
}




?>