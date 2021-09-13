<?php
$aNombre=array ("juan", "jose", "tomas", "lucas", "martin");
print_r($aNombre);
$elegido=$aNombre[2];
echo ($elegido."\n");

if ($elegido==$aNombre[4]) 
{echo "Estamos en la final" ;}

elseif ($elegido == $aNombre[3])
{echo "llegamos a cuartos" ;}

elseif ($elegido == $aNombre[2]||$elegido == $aNombre[1])
{ echo "somos segundos" ;}

else 
{echo "nos quedamos afuera";}
?>

<?php
$aNombre2[]=array("jose","pepe");
print_r($aNombre2);








?>

