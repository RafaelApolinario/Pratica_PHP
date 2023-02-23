<div class="titulo">Interface</div>

<?php
interface Animal {
    function respirar();
}

interface Canino extends Animal { // uma interface pode ser extendida por mais outras interfaces e sera obrigatorio usar todas funções q elas carregam
    function latir(): string;
    // com extends de animal agr canino tem obrigação de carregar a função respirar e latir.
}
// classe so herda um outra classe nao pode herdar mais de uma

interface Mamifero {
    function mamar();
}

class Cachorro implements Canino, Mamifero{ // quando você implementa algo voce tem a obrigação de usar a função que interface carrega.
    function respirar(){
        return "Irei usar oxigênio <br>";
    }
    function latir(): string {
        return "Au Au";
    }
    function mamar(){
        return "Irei usar leite<br>";       
    }
};

$animal1 = new Cachorro(); //
echo $animal1->respirar(), '<br>';
echo $animal1->latir(). '<br>';

// extends é para extender uma interface ou uma classe, uma classe so pode receber uma herança ou seja uma classe e interface pode receber vairas outras interfaces.
//implements serve para implementar uma interface a uma classe
?>

