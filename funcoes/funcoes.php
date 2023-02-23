<div class="titulo">Funções e Escopo</div>


<?php
function imprirMensagens(){
    echo "olá!";
    echo "Até a próxima! <br>";
}
    imprirMensagens();//resultado= olá!Até a próxima!

$variavel =1;
function trocaValor() {
    $variavel = 2;
    echo "Durante a função : $variavel <br>";  
}
//o exemplo a baixo foi criado para mostrar que a variavel que esta dentro da função nao atribui um novo
//valor para variavel, ela não é global, a pesar do nome serem iguais a tratativa e diferente.
echo "antes: $variavel <br>"; //1
trocaValor(); //2
echo "Depois: $variavel <br>";//2

function trocaValorDeVerdade(){
    global $variavel;
    $variavel = 3;
    echo "Durante a função : $variavel <br>";
}

echo "antes: $variavel <br>";//1
trocaValorDeVerdade();//3
echo "Depois: $variavel <br>";//3
?>