<?php
//init_set('display_errors',1);
//init_set('display_starup_errors',1);
//error_reporting(E_ALL);

$aproductos[]=array(
    "nombre" => "smart tv 55 \"",
    "marca"=> "hitachi",
    "modelo"=>"abc",
    "stock"=>60,
    "precio"=>58000
);
$aproductos[]=array(
    "nombre" => "samsung",
    "marca"=> "galaxi a30",
    "modelo"=>"awbc",
    "stock"=>0,
    "precio"=>2000
);
$aproductos[]=array(
    "nombre" => "Aire surrey",
    "marca" =>"kien sabe",
    "modelo"=>"chirimbolo",
    "stock"=>5,
    "precio"=>45000
);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Listado de productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col 12 text-center p-5 " >
            <h1>Listado de productos</h1>
        </div>
    </div>

    <div class="row">
        <div class="col 12">
            <table class="table table-hover border">
                <tr>
                    <th>Nombre</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Stock</th>               
                    <th>Precio</th>
                    <th>Accion</th>
                </tr>
                <?php
                    $contador =0;
                    while($contador <3)
                    {
                ?>
                        <tr>
                            <td><?php echo $aproductos[$contador]["nombre"];?></td>
                            <td><?php echo $aproductos[$contador]["marca"];?></td>
                            <td><?php echo $aproductos[$contador]["modelo"];?></td>
                            <td><?php echo $aproductos[$contador]["stock"]==0? "no hay stock":($aproductos[$contador]["stock"]>10? "hay stock" : "poco stock");?></td> 
                            <td><?php echo $aproductos[$contador]["precio"];?></td>
                            <td><button class="btn btn-primary"> comprar </button></td>
                        </tr>
                    <?php $contador++;
                    }?>
            </table>
        </div>


    </div>
</div>   
</body>
</html>