<?php
//Herencia
//clase
class Vehiculo{
    //atributos
    public $motor = false;
    public $marca;
    public $color;
    //metodos
    public function estado(){
        if($this->motor){
            echo "El motor está encendido  <br>";
        }else{
            echo "El motor está apagado  <br>";
        }
    }

    public function encenderMotor(){
        if($this->motor){
            echo "No es necesario, el botón ya está encendido";
        }else{
            echo "Ha encendido el motor con exito <br>";
            $this->motor = true;
        }
    }
}

class Moto extends Vehiculo{
    public function verMarca(){
     $this->marca = "HONDA";
     echo $this->marca;
    }
}
$moto = new Moto();
$moto->estado();
$moto->encenderMotor();
$moto->verMarca();
?> 