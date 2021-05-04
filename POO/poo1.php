<?php

use docente as GlobalDocente;
use persona as GlobalPersona;

ini_set('display errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

//definicion de clases

class persona {
    protected $dni;
    protected $nombre;
    protected $edad;
    protected $nacionalidad;

    public function setdni($dni){$this->dni = $dni; }
    public function getdni(){return $this ->dni;}

    public function setnombre($nombre){$this->nombre = $nombre; }
    public function getnombre(){return $this ->nombre;}

    public function setedad($edad){$this->edad = $edad; }
    public function getedad(){return $this ->edad;}

    public function setnacionalidad($nacionalidad){$this->nacionalidad = $nacionalidad; }
    public function getnacionalidad(){return $this ->nacionalidad;}
}

class alumno extends persona {
    private $legajo;
    private $notaportfolio;
    private $notaphp;
    private $notaproyecto;

    public function __construct(){
        $this->notaportfoilio = 0.0;
        $this->notaphp = 0.0;
        $this->notaproyecto = 0.0;      }

    public function __get($propiedad){
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor){
         $this->$propiedad=$valor;
    }

    public function imprimir(){
        echo "nombre =" . $this->nombre . "<br>";
        echo "edad =" . $this->edad . "<br>";
        echo "nota portfolio =" . $this->notaportfolio . "<br>";
        echo "nota php =" . $this->notaphp . "<br>";
        echo "nota proyecto =" . $this->notaproyecto . "<br>";
        echo "promedio =" . $this->calcularpromedio() ."<br><br>";      }

    public function calcularpromedio(){
        $promedio=($this->notaportfolio + $this->notaphp + $this->notaproyecto)/3;
        return $promedio;
    }
    public function __destruct()
    {
        echo "destruyendo el objeto" . $this->notaphp . "<br>";
    }
}

    class docente extends persona {
        public $especialidad;
        const ESPECIALIDAD_WP = "wordpress";
        const ESPECIALIDAD_ECO = "economia aplicada";
        const ESPECIALIDAD_BBDD = "base de datos";

        public function imprimir()
        {
            echo "nombre = " . $this->nombre . "<br>";
            echo "edad = " . $this->edad . "<br>";
            echo "especialidad= " . $this->especialidad . "<br><br>";}

        public function imprimirespecialidadeshabilitadas(){
            echo "la especialidad habilitada puede ser : <br>";
            echo self:: ESPECIALIDAD_WP . "<br>";
            echo self:: ESPECIALIDAD_ECO . "<br>";
            echo self:: ESPECIALIDAD_BBDD . "<br>";
        }
        public function __destruct(){
            echo  "destruyendo el objeto" . $this->nombre . "<br>";
        }
    }

    // programa
    
    $alumno1 = new alumno();
    $alumno1->setnombre("ana");
    $alumno1->setedad (23);
    $alumno1->setnacionalidad("paraguaya");
    $alumno1->notaphp = 9;
    $alumno1->notaportfolio = 8;
    $alumno1->notaproyecto = 9;
    $alumno1->imprimir();

    $alumno2 = new alumno();
    $alumno2->nombre = "mati";
    $alumno2->dni = "12321312";
    $alumno2->notaphp = 10;
    $alumno2->imprimir();

    $docente1 = new docente();
    $docente1->setnombre ("david ledesma");
    $docente1->especialidad = docente::ESPECIALIDAD_ECO;
    $docente1->imprimir();
    $docente1->imprimirespecialidadeshabilitadas();

    


    ?>