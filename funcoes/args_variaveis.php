<div class="titulo">Args variaveis</div>


<?php
 function soma($a, $b){
    return $a + $b;
 }
echo soma(14, 15) . '<br>'; // resuldado vai dar 29
echo soma(6,5,4) . '<br>'; // resuldado vai dar 11 pq so vai pegar os dois primeiros numeros


function somaCompleta(...$numeros){
    $soma = 0; // criei uma variavel para carregar os resultados finais com partida de 0
    foreach($numeros as $num){
        $soma += $num;
    }
    return $soma ;// fiz um foreach para percorrer o array o array vai ser->
    //'$numeros' e '$num' vai ser cada numeros no array por unidade
}

echo '<br>' . somaCompleta(6, 7, 8);

$array = [6, 7, 8];
echo '<br>' . somaCompleta(...$array); // se se for colocado como argumento a variavel $array não vai ser 
//identificado os valores dentro do array mas com os 3 pontos é como se tivesse colocando os numero que o array carrega dentro dos argumentos.

function membros($titular, ...$dependentes){
    echo "titular: $titular <br>";
    if($dependentes) {
        foreach($dependentes as $dep){
            echo "Dependente: $dep <br>";
        }
    }
}

echo '<br>';
membros("ana Silva", "paula", "jose");

echo '<br>';
membros("Silva", "paulo", "josefina")


?>