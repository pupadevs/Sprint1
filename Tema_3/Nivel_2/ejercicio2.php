<?php
//Escribe un programa que intercambie la primero y ultimo caracter de una cadena
$cadena = "carpintero";

if(strlen($cadena) >= 2){
 $primeraLetra = substr($cadena, 0, 1);
 $ultimaLetra = substr($cadena, -1);
 $restoPalabra = substr($cadena, 1, -1);
 $nuevaPalabra = $ultimaLetra . $restoPalabra . $primeraLetra;
 echo $nuevaPalabra;
}