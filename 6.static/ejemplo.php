<?php
//clase
class Pagina{
    //atributos
    public $nombre = "Naranja que ver";
    public static $url = "https://naranjaquever.pe";
    //metodos
    public function bienvenida(){
        echo "Bienvenido a " . $this->nombre . " , registrate aquí <a href=".self::$url." target='_blank'>link</a> <br>";
    }
    public static function bienvenida2(){
        echo "Bienvenido a " . self::$url ."<br>";
    }

}
class Web extends Pagina{

}
//para la function por default
$pagina = new Pagina();
$pagina->bienvenida();
//para la funcion static
Pagina::bienvenida2();
Web::bienvenida2();

?>