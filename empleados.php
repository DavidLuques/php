<?php
$aEmpleados=array();
$aEmpleados[]=array("dni"=>33333333, "nombre"=>"epatinafio", "bruto"=>35000);
$aEmpleados[]=array("dni"=>44444444, "nombre"=>"pancracio", "bruto"=>1000);
$aEmpleados[]=array("dni"=>55555555, "nombre"=>"sabato", "bruto"=>5000);
$aEmpleados[]=array("dni"=>66666666, "nombre"=>"donald", "bruto"=>45000);
print_r($aEmpleados);
?> 
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <table class="table table-hover border">
        <tr>
            <th>DNI</th>
            <th>NOMBRE</th>
            <th>MONTO</th>
        </tr>
        <tr><?php 
           for ($i=0; $i<count($aEmpleados);$i++)
            { ?> <tr>
                    
                    <td> <?php echo $aEmpleados [$i]["dni"];  ?> </td>
                    <td> <?php echo $aEmpleados [$i]["nombre"];  ?> </td>
                    <td>  <?php echo $aEmpleados [$i]["bruto"];  ?> </td>
                    
                   
           <?php }?>
                 </tr>

    </table>
</body>
</html>