<?php 
    function print_f($variable)
    {   $contenido="";
        if (is_array ($variable))
            { foreach($variable as $item)
                {
                    $contenido .= $item . "\n";
                }
                file_put_contents("datos.txt",$contenido );
            }
        else {
            file_put_contents("datos.txt",$variable);}
        }
$anotas=array(1,2,3,4,5);
$msg="este es un msg";
print_f ($msg);





?>