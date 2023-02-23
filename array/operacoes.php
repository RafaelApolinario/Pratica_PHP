<div class="titulo">Operações</div>

<?php

$meses = array(
    1=>"janeiro",
    "fevereiro",
    "março",
    "abril",
    "maio",
    "junho",
);

$dados1 = [
    "nome" => "jose",
    "idade" => 28,
];

$dados2 = [
    "naturalidade" => "fortaleza"
];

$dadosCompletos = $dados1 + $dados2;
var_dump($dadosCompletos);
echo "<br>";
print_r($dadosCompletos);

//is_array — Encontra se uma variável é um array

echo "<br>" . is_array($dadosCompletos); // para saber quantos arrays possui na variavel

// count — Conta todos os elementos em uma matriz, em um objeto, array.
echo "<br>" . count($dadosCompletos); // para saber quantos elementos possui dentro do array
echo '<br>';

//array_rand — Escolha uma ou mais chaves aleatórias de um array
$indice = array_rand($dadosCompletos); // rand é um conceito randomico que o mesmo que aleatorio ou na sorte.
echo "$indice = $dadosCompletos[$indice]";

echo "{$dadosCompletos[$idade]}"; // imprimir uma chave especifica dentro de array.

//unset — Desativar uma determinada variável
unset($dadosCompletos["nome"]);// esta removendo a chave nome do array dadoscompletos
print_r($dadosCompletos);

// usar mais para unir arrays de numeros não é funcional é necessario usar.

$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8];

$decimais = $pares + $impares;
echo "<br>";
print_r($decimais); // dessa forma vai imprimir somente os pares pois vai dar preferencia ao numerando

//array_merge — Mescla um ou mais arrays.
$decimais = array_merge($pares, $impares);// uniu os dois arrays porem fora de ordem.
print_r($decimais);

// sort — Classifica um array em ordem crescente
sort($decimais);
echo '<br>';
print_r($decimais);

//para adicionar um elemento com chaves em um array
// ensirir o nome da variavel que quer alterar, entre couchetes o nome da chave e depois da igualdade o valor para chave.
$dados2 ['endereco'] = 'rua B';
print_r($dados2);



