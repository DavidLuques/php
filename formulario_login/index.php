<?php
if($_POST){
    $usuario="admin";
    $contrasenia="12345";


    $user=$_REQUEST['txtusuario'];
    $pass=$_REQUEST['txtclave'];
    echo $user." ".$pass;

    if ($user==$usuario and $pass==$contrasenia)
    { header("location:acceso_confirmado.php"); }
}



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
    <main id="container">
        <div class="row">
            <div class="col-12 mt-5 ms-5 text">
                <h1>Formulario</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2 ms-5 mt-2">
                <form action="" method="POST">
                    <div>
                    <input type="text" name="txtusuario">
                    </div>
                    <div>
                        <input type="password" name="txtclave">
                    </div>
                    <div>
                        <input type="submit" value="ingresar">
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>

    

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>