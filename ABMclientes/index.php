<?php 
//abrir el archivo.txt si existe
 if(file_exists("archivo.txt")){
//leer contenido de archivo y guardarlo en $jsonclientes
$jsonClientes=file_get_contents("archivo.txt");
//convertir el json en array y guardarlo en  $aClientes
$aClientes=json_decode($jsonClientes,true);
}
else {
    # si no existe el archivo enconces creamos  array vacio $aClientes
    $aClientes=array();
}

$id = isset($_GET["id"]) && $_GET["id"] > 0? $_GET["id"] : "";

if($_POST){   
    $dni=$_REQUEST["txtDni"];
    $nombre=$_REQUEST["txtNombre"];
    $telefono=$_REQUEST["txtTelefono"];
    $correo=$_REQUEST["txtCorreo"];
    //actualizo clientes
if ($_FILES["archivo"]["error"] === UPLOAD_ERR_OK)
     {
        $nombre = date("Ymdhmsi") . rand(1000,5000); //2021010420453710
        $archivo_tmp = $_FILES["archivo"]["tmp_name"];
        $nombreArchivo = $_FILES["archivo"]["name"];
        $extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
        $nuevoNombre = "$nombre.$extension";
        move_uploaded_file($archivo_tmp, "imagenes/" . $nuevoNombre);
    }
if ($id !="")
    {
        //si no se subio la imagen  mantengo el nombre actual que ya existia de la img
        if ($_FILES["archivo"]["error"]!==UPLOAD_ERR_OK)
        {
            $nuevoNombre = $aClientes[$id]["imagen"];
        }
    }
        //si viene una img  elimino la img anterior y se tiene que guardar la nueva
        if ($_FILES["archivo"]["error"]===UPLOAD_ERR_OK)
        {
            if ($aClientes[$id]["imagen"] != "")
            {
                unlink("imagenes/" . $aClientes[$id]["imagen"]);
            }
        }
    
    //actualizamdo
    if ($id != "")
    {
        $aClientes[$id]=array(
            "dni"=>$dni,
            "nombre"=>$nombre,
            "telefono"=>$telefono,
            "correo"=>$correo,
            "imagen"=>$nuevoNombre) ;
     } 
    else {
    $aClientes[]=array(
        "dni"=>$dni,
        "nombre"=>$nombre,
        "telefono"=>$telefono,
        "correo"=>$correo,
        "imagen"=>$nuevoNombre
    );}

//json
$jsonClientes=json_encode($aClientes);
//guardar el j son 
file_put_contents("archivo.txt",$jsonClientes);
}
if (isset ($_GET["id"]) &&  $_GET["id"] != "" && isset ($_GET["do"]) && $_GET["do"] == "eliminar")
{
 unset ($aClientes[$id]); 
 // codificar el array en json 

 $jsonClientes = json_encode ($aClientes);

 //guardar el json que es un string ()

 file_put_contents("archivos.txt" , $jsonClientes);

 header("location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABM Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fontawesome/fontawesome-free-5.15.2-web/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/fontawesome-free-5.15.2-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 my-5 text-center">
                <h1>Registro de clientes</h1>            
            </div>
        </div>
        <div class="row">
            <div class="col-6">
            <form action="" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-12 ">
                            <label for="txtDni">DNI: *</label>
                            <input type="text" id="txtDni" name="txtDni" class="form-control" required value="">
                        </div>
                        <div class="col-12 ">
                            <label for="txtNombre">Nombre: *</label>
                            <input type="text" id="txtNombre" name="txtNombre" class="form-control" required value="">
                        </div>
                        <div class="col-12 ">
                            <label for="txtTelefono">Teléfono:</label>
                            <input type="text" id="txtTelefono" name="txtTelefono" class="form-control" value=""> 
                        </div>
                        <div class="col-12 ">
                            <label for="txtCorreo">Correo: *</label>
                            <input type="text" id="txtCorreo" name="txtCorreo" class="form-control" required value="<?php echo isset($aClientes[$id]) ? $aClientes[$id]["nombre"] : "" ?> ">
                        </div>
                        <div class="col-12 m-5 " >
                            <label for="txtCorreo">Archivo adjunto:</label>
                            <input type="file" id="archivo" name="archivo" class="form-control-file" accept=".jpg, .jpeg, .png">
                            <small class="d-block">Archivos admitidos: .jpg, .jpeg, .png</small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mt-3">
                            <button type="submit" id="btnGuardar" name="btnGuardar" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-6">
                <table class="table table-hover border">
                    <tr>
                        <th>Imagen</th>
                        <th>DNI</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Accioness</th>
                    </tr>
                    <tr>
                        <?php foreach ($aClientes as $Cliente){?>
                            <td> </td>
                            <td><?php echo $Cliente["dni"];?></td>
                            <td><?php echo $Cliente["nombre"];?></td>
                            <td><?php echo $Cliente["correo"];?></td>
                            <td style="width: 110px;">
                                <a href="index.php?id=<?php echo $pos; ?>"><i class="fas fa-edit"></i></a>
                                <a href="index.php?id=<?php echo $pos;?>&do=eliminar"><i class="fas fa-trash-alt"></i></a>
                            </td>
                    </tr>
                        <?php }?>
                                    </table>
                <a href="index.php"><i class="fas fa-plus"></i></a>
            </div>
        </div>
    </div>




    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>