<div class="titulo">7 erros</div>

<?php
interface Template {
    function metodo1();
    function metodo2($parametro);      
}

abstract class ClasseAbstrata implements Template {
    public function metodo3(){
        echo " estou funcionando ";
    }
    public function metodo1(){
    
    }
}

class Classe extends ClasseAbstrata{

    function __construct($parametro){
      
    }

    public function metodo2($parametro){
       
    }    
}

$exemplo = new Classe('rafael');
$exemplo->metodo3();

?>

