<div class="titulo">Classes</div>

<?php
class Cliente {
    // atributos
    public $nome = 'Anônimo';
    public $idade = 18;

    public function apresentar() {
        echo "Nome: {$this->nome}, Idade: {$this->idade} <br>"; // para acessar um valor de uma variavel e necessario 
        //inserir o $this.
    }
}

$c1 = new Cliente(); // "c1" é o objeto , "new" é umapalavra reservada para instanciar o objeto com a class "Cliente"
$c1->nome = 'Ana luiza';// esta seta "->" serve para acessar algo , objeto, function,variavel
$c1->idade = '25';
$c1->apresentar();

$c2 = new Cliente();
$c2->nome = 'Carlos';
$c2->idade = 23;
$c2->apresentar();


class Data {
    public $dia = 03;
    public $mes = 04;
    public $ano = 1995;

    public function apresentarData() {
        echo "{$this->dia} / {$this->mes} / {$this->ano} <br>";
    }
};

$aniversario = new Data();
$aniversario->apresentarData();
// $aniversario
?>