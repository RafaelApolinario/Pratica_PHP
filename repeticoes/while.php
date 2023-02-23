<div class="titulo">While/Do while</div>

<?php
// necessario criar a cosntate antes do laço
// a diferença do while e do while é q cada o while verifica a condição e se não bater não executa mais 
//e o do while executa pelo menos uma vez isso devido a sequecia que e construida a logica.

const VALOR_LIMETE = 5;
$contador = 0;

while ($contador < VALOR_LIMETE){ // cria a codição de inicio e de fim da repetição
    echo "while $contador <br>";// a forma como vai imprimir o resultado
    $contador++; // e o contador.
// resultado = 
// while 0
// while 1
// while 2
// while 3
// while 4
}
echo '<br><hr><br>';
$contador = 5;
do {
    echo  "do-while $contador <br>";
    $contador++;
}while ($contador <  VALOR_LIMETE);
// RESULTADO =  do-while 5 ,  mesmo 5 ser acima do valor limite o do while faz com quem entre no laço pelo menos uma vez e 
//imprime o valor 5

// DESAFIO

$matriz = [
    ['1', '2', '3', '4', '5' ],
    ['6', '7', '8', '9', '10'],
    ['11', '12', '13', '14', '15'],
    ['16', '17', '18', '19', '20'],
];

foreach($matriz as $linha){
    foreach($linha as $valor){
        echo "$valor";
    }
    echo "<br>";
}
?>
<style>
    table{
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }
    
</style>


 