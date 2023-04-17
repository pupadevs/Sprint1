<?php
//Esciribir una funcion para verificar el grado de un estudiante de acuerdo a la nota
$notas = array(8, 5, 4);
$num = 30;
function notaEstudiante($num){
   // $totalNotas = array_sum($notas);
 //   $promedio = $totalNotas / 5;
 //  for($i = 0; $i< count($notas); $i++){
        if($num >= 60){
        echo "primera dvision" . $num;
        }else if($num >= 45 && $num <= 59){
            echo "El grado que haras es de segunda division";

        }else if($num >= 33 && $num <= 44){
            echo "Tercera division";
        }else{
            echo "Reprobaste";
        }
             
        }

   // }
notaEstudiante($num);
?>