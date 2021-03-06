<?php
class Num{
    public function paroimpar($num){
        if($num % 2 == 0){
           echo "El número " . $num . " es par";      
        }else{
            echo "El número " . $num . " es impar"; ;
        }
    }
}
$valor = new Num();
$valor->paroimpar(81);


?>