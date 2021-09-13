<?php 
$aProductos = array("TV Samsung", "Cafetera Oster", "Notebook HP");

echo "<table>"
for($i = 0; $i < count($aProductos); $i++){
    echo "<tr><td>" . $aProductos[$i]. "</td></tr>";
}
echo "</table>";