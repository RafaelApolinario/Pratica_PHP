<div class="titulo">Multidimensionais</div>

<?php
$dados = [
    [
    "nome" => "Roberto",
    "idade" => 28,
    "naturalidade" => "São paulo",
    ],
    [
        "nome" => "Maria",
        "idade" => 18,
        "naturalidade" => "Minas gerais",
    ],
];

print_r($dados);
echo '<br>'. $dados[0] ['idade'];
echo '<br>'. $dados[1] ['nome'];
echo '<br>'. $dados[0] ['naturalidade'];

//inserir array uma nova chave a um array
// o primeiro couchetes serve para indicar qual array deseja inserir ou se estiver vazio seria pra criar um novo
$dados [] = 
    [
    "nome" => "Rafael",
    "idade" => 27,
    "naturalidade" => "Bragança paulista",
    ];
echo '<br>';
print_r($dados);

//inserir uma chave com valor a um array ja existente, nome da variavel com array, 
//primeiro couchete com o valor do indice do array que deseja inserir
// segundo couchete com o nome da chave entre parenteses
// colocar uma = e entre estring o valor da chave.
$dados [2] ['sobrenome'] = 'Apolinário';
echo '<br>';
print_r($dados[2]);


?>

