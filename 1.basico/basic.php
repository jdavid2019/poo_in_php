<?php
// relacion clase - atributos y metodos , instanciar a la clase mediante la creación de un objeto
class Persona{
    public $nombre="Joseph";
    
    public function salida ($mensaje){
        echo $mensaje;
    }
}
$persona = new Persona();
// obtengo el nombre
echo $persona->nombre ."<br>";
// personalizo el mensaje que deseo
$persona->salida("Código básico con POO");

?>