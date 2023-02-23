<div class="titulo">Foreach</div>

<?php
echo'<hr>';
echo '<br>';
$array = [1 => 'Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado'];

foreach ($array as $dia) {
    echo "$dia <br>";
}
echo'<hr>';
echo '<br>';
foreach ($array as $indice => $dia) {
    echo "$indice => $dia <br>";
}

echo'<hr>';
echo '<br>';
$matrix = [
    ['a ', 'b ', 'c'],
    ['a ', 'e ', 'i ', 'o ', 'u']
];

foreach ($matrix as $linha) { // acessou a variavel matrix e dentro da variavel cada indice dos dois arrais
    foreach ($linha as $letra) { // dentro de cada linha de array acessou cada letra escrita neste array
        echo "$letra";
    }
    echo '<br>';
}

?>