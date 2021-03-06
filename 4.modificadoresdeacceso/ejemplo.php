<?php
class Facebook{
    public $nombres;
    public $edad;
    private $pass;

    public function __construct($nombres,$edad,$pass){
        $this->nombres = $nombres;
        $this->edad = $edad;
        $this->pass = $pass;
    }

    public function verInfo(){
        echo "Nombre: " . $this->nombres . "<br>";
        echo "Edad: " . $this->edad . "<br>";
        self::cambiarPass("321");
        echo "Contraseña: " . $this->pass  . "<br>";
    }

    private function cambiarPass($newPass){
        $this->pass = $newPass;
    }

}

$facebook = new Facebook("jose",32,"123");
$facebook->verInfo();
//echo $facebook->pass; //veo que aqui no se puede mostrar porque es un metodo privado
?>