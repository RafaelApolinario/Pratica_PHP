<div class="titulo">Herança</div>

<?php
class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade) { // o constructor da os parametros obrigadorios na hora de colocar parametros quando for instanciado.
    $this->nome = $nome;
    $this->idade = $idade;
    echo 'pessoa criada! <br>';
    }

    public function apresentar(){
        echo "{$this->nome}, {$this->idade} anos <br>";
    }
}
// neste caso a classe Usuario esta recebendo pessoa como herança ou seja esta recebendo todos os paramentros da classe Pessoa somando com os parametros 
//que ja existe na classe usuario.
class Usuario extends Pessoa{
    public $login;

    public function __construct($nome, $idade,$login){
        parent :: __construct($nome,$idade); // parent :: é usado para chamar uma função que esta dentro da classe pai 
        $this->login = $login; 
    }

    public function apresentar(){
        echo "@{$this->login}:<br>";
        parent::apresentar();
    }     
}
$usuario = new Usuario('Gustavo Martins' , 28 , 'uaiguh'); // new é uma palavra reservada para instaciar um objeto, logo depois de chamar new você menciona a classe que deseja instanciar o objeto.
$usuario->apresentar();
?>