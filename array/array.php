<div class="titulo">Array</div>

<?php
$lista = array(1, 2 , 3.4, "texto"); // tipos de array int, float, string
echo $lista . '<br>'; // mostra somente que é um array
var_dump($lista); // mostra os valores e o indice
echo '<br>';
print_r($lista); // mostra os valores sem indice

echo '<br>' .$lista[0]; // 1
echo '<br>' .$lista[1]; // 2
echo '<br>' .$lista[2]; // 3.4
echo '<br>' .$lista[3]; // texto
// mostra os arrays por indice

var_dump($lista[3000]) // vardump de um indice que não existe vai retornar null

?>