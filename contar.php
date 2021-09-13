<?php
$cant;

function contar ($aArray){
    $cant=0;
    foreach($aArray as $elemento ){
    $cant++;    
    }
    return $cant;
}
?>

<?php 
$aNotas= array(9,8,7,5,1);
echo "cantidad de notas:" .contar($aNotas)?>