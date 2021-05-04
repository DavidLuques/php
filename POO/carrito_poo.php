<?php
class cliente {
    private $dni;
    private $nombre;
    private $correo;
    private $telefono;
    private $descuento;

    public function __construct() {
        $this->descuento = 0.0;
    }
    
    public function __get($propiedad) {
        return $this->$propiedad;
    }
        
    public function __set($propiedad, $valor){
        $this->$propiedad = $valor;
    }

    public function imprimir(){
        echo "dni :" . $this->dni . "<br>";
        echo "nombre: ". $this->nombre . "<br>";
        echo "correo :" . $this->correo . "<br>";
        echo "telefono : " . $this ->telefono . "<br>";
        echo "descuento :" . $this-> descuento . "<br>";
    }
}

class producto {
    private $cod;
    private $nombre;
    private $descripcion;
    private $precio;
    private $iva;

    public function __construct() {
        $this->aproductos = array();
        $this->subtotal = 0.0;
        $this->total = 0.0;
    }

    public function __get($propiedad) {
        return $this->$propiedad;
    }
        
    public function __set($propiedad, $valor){
        $this->$propiedad = $valor;
    }

    public function imprimir (){}

}

class carrito {
    private $cliente;
    private $aproductos;
    private $subtotal;
    private $total ;

    public function __construct() {
        $this->aproductos =array();
        $this->subtotal = 0.0;
        $this->subtotaliva = 0.0;
        $this->total=0.0;
    }

    public function __get($propiedad) {
        return $this->$propiedad;
    }
        
    public function __set($propiedad, $valor){
        $this->$propiedad = $valor;
    }
    public function cargarproducto($producto){
        $this->aproductos[]= $producto;
    }
    public function imprimirticket (){
        echo "fecha :";
        echo "cliente :" . $this->cliente->nombre . "<br>";
       foreach ($this->aproductos as $producto){
            echo  $producto->nombre . "<br>";
       }
        echo "subtotal :" . $this->subtotal . "<br>";
        echo "total :" . $this->total . "<br>";
    }

}

$cliente1 = new cliente();
$cliente1->dni = "12345678";
$cliente1->nombre= "bernabe";
$cliente1->correo = "berni@live.com";
$cliente1->telefono = "1123124124124";
$cliente1->descuento = 0.05;
//$cliente1->imprimir();
//print_r($cliente1);

$producto1 = new producto ();
$producto1->cod ="qwr579";
$producto1->nombre ='notebook 15"';
$producto1->descripcion ="Esto es una compu hp";
$producto1->precio = 30800;
$producto1->iva =21;
//$producto1->imprimir();

$producto2= new producto();
$producto2->cod = "asdfgasdf";
$producto2->nombre = "heladera whirpool";
$producto2->descripcion= "esta es una heladera";
$producto2->precio = 76000;
$producto2->iva= 10.5;
//$producto2->imprimir();

$carrito = new carrito();
$carrito->cliente = $cliente1;
//print_r($carrito);
$carrito->cargarproducto($producto1);
$carrito->cargarproducto($producto2);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <?php   $carrito->imprimirticket(); //imprime el tiquet de la compra ?>
</body>
</html>