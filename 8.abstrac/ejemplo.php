<?php
abstract class Molde{
    abstract function ingresarNombre($nombre);
    abstract function obtenerNombre();
}

class Persona extends Molde{
    public $mensaje = "Hola Joseph <br>";
    public $nombre;

    public function mostrar(){
        print $this->mensaje;
    }
    public function ingresarNombre($nombre, $aka = "deivid"){
        $this->nombre = $nombre . " conocido como " . $aka;
    }
    public function obtenerNombre(){
        print $this->nombre;
    }
}
$persona = new Persona();
$persona->mostrar();
$persona->ingresarNombre("Joseph David Ninaquispe Florez");
$persona->obtenerNombre();
?>