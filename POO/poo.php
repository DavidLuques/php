<?php
ini_set('display_errors',1);

class persona {
   private $dni;
    private $nombre;
    private $edad;
    private $nacionalidad;

    public function getdni (){return $this->dni;}
    public function setdni ($dni){$this->dni;}

    public function getnombre(){return $this->nombre;}
    public function setnombre(@nombre) { $this->nombre = $nombre;}

    public function setedad (){}


    public function imprimir(){}
}

class alumno extends persona{
    

    private $legajo;

    public function __get($propiedad) {
        return $this->$propiedad;
    }
    public function __set($propiedad, $valor) {
        $this->$propiedad = $valor;
    }

   // public function __construct(){
    private $notaPortfolio = 0.0;
    private $notaPhp = 0.0;
    public $notaProyecto = 0.0;
    

    public function imprimir(){
        echo "dni" . $this->nombre . "<br>";
        
    }
    public function calcularPromedio(){}
}

class docente extends persona {

    public $especialidad;

    const ESPECIALIDAD_WP = "word press";
    const ESPECIALIDAD_ECO = "economia aplicada";
    const ESPECIALIDAD_BBDD = "base de datos";

    public function imprimir(){
        echo "dni: " . $this->dni . "<br>";
    }

    public function imprimirEspecialidadesHabilitadas(){
        echo "las especialidades habilitadas son: <br>";
        
    }
}


//uso

$persona1 = new Persona();
$persona1->dni = "35678321";
$persona1->nombre = "Juan Perez";
$persona1->edad = 30;
$persona1->nacionalidad = "Argentina";
$persona1->imprimir();

$alumno1 = new Alumno();
$alumno1->nombre = "Julia Lopez";
$alumno1->dni = "38979977";
$alumno1->nacionalidad = "Argentina";
$alumno1->legajo = 7898;
$alumno1->notaPhp = 8.5;
$alumno1->notaPortfolio = 7.5;
$alumno1->notaProyecto = 8;
$alumno1->imprimir();

$alumno2 = new Alumno();
$alumno2->nombre = "Matías Diaz";
$alumno2->nacionalidad = "Colombiano";
$alumno2->notaPortfolio = 9;
$alumno2->notaPhp = 9;
$alumno2->notaProyecto = 8;
$alumno2->imprimir();

$docente1 = new Docente();
$docente1->nombre = "Juan Carlos Rosales";
$docente1->dni = "tengo dni wiii";
$docente1->imprimir();










?>