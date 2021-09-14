<?php 
class Auto{
    public $patente;
    public $marca;
    public $modelo;
    public $color;
    //constructor por defecto
    /*public function __construct(){
        $this->marca= "Ford";
        $this->modelo= "T ";
        $this->color= "negro";
    } */
    //constructor por parametros
      


    public function imprimir (){
        echo "<table class='table table-bordered table-striped table-hover'>";
        echo "<tr><td> Modelo:". $this->modelo."</td>";
        echo "<td>Marca:". $this->marca."</td>";
        echo "<td>Color:". $this->color."</td></tr>";
        echo "</table>";
    }
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container m-4">
    <?php

    $auto1= new auto();
    $auto1->patente="aaa-234";
    $auto1->imprimir();

    $auto2=new auto();
    $auto2->marca ="alguna sera !";
    $auto2->imprimir();
?>
</div>
</body>
</html>
