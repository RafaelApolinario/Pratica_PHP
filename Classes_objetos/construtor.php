<div class="php">Construtor e destrutor</div>

<?php
class Pessoa {
    public $nome;
    public $idade;

    function __construct($novoNome , $idade){// aqui criamos um constructor que serve para colocar parametros obrigatorios 
        //na hora de instancar as classes.
        $this->nome = $novoNome;
        $this->idade = $idade;
    }
    function apresentar(){
        echo "Meu nome é {$this->nome} e minha idade é {$this->idade} anos.";
    }
}
$cliente = new Pessoa('Rafael',27);
$cliente->apresentar();

?>