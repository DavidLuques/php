<?php 
if($_POST)
{   $iva=$_REQUEST["lstiva"];
    $preciosiniva=$_REQUEST["txtimportesiniva"];
    $precioconiva=$_REQUEST["txtimporteconiva"];
    if($preciosiniva != "" && $precioconiva == "")
    {$preciosiniva1= ($iva/100+1)*$preciosiniva;
    $precioconiva1=$preciosiniva;}
    elseif($preciosiniva == "" && $precioconiva != "")
    {$precioconiva1= (1-$iva/100)*$precioconiva;
    $preciosiniva1=$precioconiva;}
    elseif(($preciosiniva != "" && $precioconiva != "")||($preciosiniva == "" && $precioconiva == ""))
    {exit;}  
print_r($_REQUEST);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center my-5" >
                <h1> Calculadora de IVA </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-3 offset-2">
                <form action="" method="post">
                    <div>
                        <label for="" class="my-3">IVA</label>
                        <select name="lstiva" class="form-control">
                            <option  value="21" >21</option>
                            <option  value="10.5" >10.5</option>
                        </select>
                    </div>
                    <div>
                        <label for="" class="my-3">Precio sin iva 
                        <input type="text" name="txtimportesiniva" id="txtimportesiniva">
                        </label>                    
                    </div>
                    <div class="my-3">
                        <label for="">Precio con iva 
                        <input type="text" name="txtimporteconiva" id="txtimporteconiva">
                        </label>                    
                    </div>
                    <div class="my-3">
                        <label for=""> IVA Cantidad :</label>                    
                    </div>
                    <div >
                        <button type="subtmit" class="btn-lg btn-primary">CALCULAR</button>
                    </div>
                </form>
            </div>
            <div class="col-4 my-3">
                <table class="table table-hover border">
                    <tr>
                        <th>IVA:</th>
                            <td><?php if($iva!=""){echo ("$iva");}?></td>
                    </tr>
                    <tr>
                        <th>PRECIO SIN IVA:</th>
                            <td><?php if($precioconiva1!="")
                            {echo "$precioconiva1";}?></td>
                    </tr>
                    <tr>
                        <th>PRECIO CON IVA:</th>
                            <td><?php if($preciosiniva1!=""){echo $preciosiniva1;}
                            else {
                                echo "ola";
                            }?></td>
                    </tr>
                    <tr>
                        <th>IVA CANTIDAD:</th>
                            <td></td>
                    </tr>
                </table>
            </div>
        </div>
    
    </div>
    
</body>
</html>