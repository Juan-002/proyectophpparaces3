<?php
    class persona{

        public $nombre;
        public $edad;
        public $pais;

        function __construct($nombre, $edad, $pais){

            $this->nombre=$nombre;
            $this->edad=$edad;
            $this->pais=$pais;

        }
    public function mostrarDatos(){
            return "Hola ". $this->nombre." tienes ".$this->edad . "de edad y eres de ". $this->pais;
        }

    }   
    class estudiante extends persona{
        function __construct($nombre, $edad, $pais, $carrera){// aqui sobre escribimos  los datos de la clase padre adicional agregamos   el nuevo item que va a tener  la clase
            parent::__construct($nombre, $edad, $pais);// aqio se declara que es lo que queremos que  erede de la clase padre
            $this->carrera = $carrera;//declaramos el item que es distinto  a los items padres

        }
       
    }

    class trabajador extends persona{
        function __construct($nombre, $edad, $pais, $trabajo){
            parent::__construct($nombre, $edad, $pais);
            $this->trabajo=$trabajo;
        }
    }

    $juan = new trabajador("Juan", 27, "Colombia", "dev");
    echo $juan -> trabajo;
?>    