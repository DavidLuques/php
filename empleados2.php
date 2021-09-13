<?php
$aEmpleados=array();
$aEmpleados[]=array(33333333, "epatinafio", 35000);
$aEmpleados[]=array(44444444, "pancracio", 1000);
$aEmpleados[]=array(55555555, "sabato", 5000);
$aEmpleados[]=array(66666666, "donald", 45000);
print_r($aEmpleados);
foreach($aEmpleados as $empleado){echo ($aEmpleados[3][2]);}
?> 