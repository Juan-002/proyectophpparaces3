<?php
/* tipos de scope:
Public: se puede llamar los datos de  la clase  desde cualquier parte del codigo así  así no se halla echo un return desde la clase principal
protected: solo muestra los datos  la clase principal y las clases que hallan eredado el dato que esta en protected
private: solo  se puede mostrar la informacion si es llamada desde la clase principal, otras clases así hallan eredado el atributo  no lo pueden mostrar
*/
class usuario {
    private $dni;
    public $nombre;
    protected $correo;

    function __construct($nombre, $correo, $dni){
        $this->nombre = $nombre;
        $this->correo= $correo;
        $this->dni=$dni;
    }
/*    public function mostrarDatos(){
        return $this -> dni;
    }*/ # si avilitamos la funcion mostrar datos para el dni qiue en este caso es privado  desde  esta clase se va poder ver

}

class usuarioRegistrado extends usuario{
    function __construct($nombre, $correo, $dni, $contraseña){
        parent::__construct($nombre, $correo, $dni);
        $this->contraseña = $contraseña;
    }
    public function mostrarDatos(){
        return $this -> correo; # pero si intentamos  mostrar el dni  desde esta clase aun que lo halla heredado nos va a mandar un error por ser privado  caso contrario del correo que solo esta protegido entonses lo va a poder motrar incluso  las clases que lo hallan eredado
    }
}

$juan = new usuarioRegistrado ("Juan Fernando","juan.002@hotmail.es", "123456", 159357);

    echo $juan -> mostrarDatos();

?>