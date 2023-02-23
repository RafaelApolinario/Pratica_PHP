<div class="titulo">Membros estaticos</div>

<?php
class A {
    public $naoEstatico = 'Variavel não instanciada';
    public static $static = " Variavel de classe ( estatica )";
    
    public function mostrarA(){
        echo "não estatico {$this->naoEstatico} <br/>";
        //Tentativa de exibir o não estitco 
        // echo "Estatico {$this->static}";
        // echo "Estatico {self::static}";
        echo "Estatico ".self::$static."<br>"; // self:: serve para chamar uma função estatica ,e deve ser contatenada
    }
}
$objeto = new A();
$objeto->mostrarA();


?>