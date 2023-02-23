<div class="title">Interpolação</div>

<?php
$numero = 10;
echo $numero;
echo '<br> $numero'; //aspas simples não compila a variavel.
echo "<br> $numero"; //aspas duplas compila a variavel.

$texto = "A sua nota é: $numero";
echo "<br> $texto";

$objeto = 'caneta';
echo "<br> eu tenho 5 $objeto";
echo "<br> eu tenho 5 {$objeto}s mas perdi 3 {$objeto}s";
?>