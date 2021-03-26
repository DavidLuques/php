<?php
    $apacientes[]=array(
     "dni"=>"xxxxxxxx"   ,
     "nombre"=>"Ana Acunia",
     "edad"=>"45",
     "peso"=>"81.5"
    );
    $apacientes[]=array(
        "dni"=>"xxxxxxxx"   ,
        "nombre"=>"Gonzalo Bustamante",
        "edad"=>"66",
        "peso"=>"79"
       );
       $apacientes[]=array(
        "dni"=>"xxxxxxxx"   ,
        "nombre"=>"juan irraola",
        "edad"=>"28",
        "peso"=>"82"
       );
       $apacientes[]=array(
        "dni"=>"xxxxxxxx"   ,
        "nombre"=>"beatriz Ocampo",
        "edad"=>"59",
        "peso"=>"79"
       );

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Pacientes</title>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col 12 ">
            <h1>Listado de Pacientes</h1>
            </div>
        </div>
    <table class="table table-hover">
       <tr>
        <th>DNI</th>
        <th>NOMBRE Y APELLIDO</th>
        <th>EDAD</th>
        <th>PESO</th>
       </tr>

       <tr><?php 
           for ($i=0; $i<count($apacientes);$i++)
            { ?> <tr>
                    
                    <td> <?php echo $apacientes [$i]["dni"];  ?> </td>
                    <td> <?php echo $apacientes [$i]["nombre"];  ?> </td>
                    <td>  <?php echo $apacientes [$i]["edad"];  ?> </td>
                    <td>  <?php echo $apacientes [$i]["peso"];  ?> </td>
                   
           <?php }?>
            


       </tr>

    </table>
</div>
</body>
</html>