<?php
//numeros pares del 1 al 100
class Par{
    public function numpares(){
        for($i=2;$i<=100;$i=$i+2){
            echo "Número : " . $i . "<br>";
        }
    }
}
$par = new Par();
$par->numpares();
?>