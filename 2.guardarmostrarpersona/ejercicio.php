<?php
//clase
class Persona{
    //atributos
    public $nombre = array();
    public $apellidos = array();

    public function save($nombre,$apellidos){
    $this->nombre[]= $nombre;
    $this->apellidos[] = $apellidos;
    }

    public function mostrar(){
        for ($i=0; $i < count($this->nombre) ; $i++) { 
            $this->formato($this->nombre[$i],$this->apellidos[$i]);
        }
    }

    public function formato($nombre,$apellidos){
        echo "El nombre es " . $nombre . " y su apellido es " . $apellidos . "<br>";
    }
}


//objeto
$persona = new Persona();
$persona->save("Joseph David", "Florez");
$persona->save("David Joseph", "Gonzales");
$persona->mostrar();
?>