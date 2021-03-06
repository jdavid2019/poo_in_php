<?php
//numeros impares del 1 al 100
class numImpar{
    public function valorimpar(){
        for($i=1;$i<=100;$i=$i+2){
            echo "Número impar " . $i . "<br>";
        }
    }
}

$ni = new numImpar();
$ni->valorimpar();
?>