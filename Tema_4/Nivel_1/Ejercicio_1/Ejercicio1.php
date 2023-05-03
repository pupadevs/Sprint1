
<?php
include_once("Employee.php");
$nom = "juan";
$sueldo = 6200;
$empleado = new Employee();
$empleado->imprimir($nom, $sueldo);
$empleado->imprimir2($nom, $sueldo);

?>