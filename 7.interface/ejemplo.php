<?php
interface Auto{
    public function encender();
    public function apagar();
}
interface Gasolina extends Auto{
    public function vaciarTanque();
    public function llenarTanque($cant);
}

class Deportivo implements Gasolina{
    private $estado = false;
    private $tanque = 0;



    public function estado(){
        if($this->estado)
            print "El carro esta encendido y tiene " .$this->tanque. " de litros en el tanque. <br>";
        else
            print "El carro esta apagado <br>";
        
    }
    public function encender(){
        if($this->estado){
            print "No puedes encender el carro dos veces <br>";
        }else{
            if($this->tanque <= 0){
                print "No puede encender el auto porque el tanque está vacio <br>";
            }else{
                print "Auto encendido correctamente <br>";
                $this->estado = true;
            }
           
        }
    }
    public function apagar(){
        if($this->estado){
            print "Carro apagado con éxito <br>";
            $this->estado = false;
        }else{
            print "El carro ya estaba apagado <br>";
        }
    }
    public function vaciarTanque(){
        $this->tanque = 0;
    }
    public function llenarTanque($cant){
        $this->tanque = $cant;

    }
    public function usar($km){
        if($this->estado){
            $reducir = $km/3;
            $this->tanque = $this->tanque - $reducir;
            if($this->tanque <= 0){
                $this->estado = false;
            }
        }else{
            print "El carro esta apagado y no se puede usar <br>";
        }  
    }
}
$deportivo = new Deportivo();
$deportivo->llenarTanque(100);
$deportivo->encender();
$deportivo->usar(120);
$deportivo->estado();