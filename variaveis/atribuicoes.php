<div class="titulo">Atribuições</div>

<?php

$title ='Atribuições';
$numero = 10;
echo '<br>' . $numero;
$numero = $numero + 1; // a variavel numero + 1
echo '<br>' . $numero;
$numero = $numero - 1; // a variavel numero - 1
echo '<br>' . $numero;
$numero--; // -- quer dizer decremento que subtrai uma unidade.
echo '<br>' . $numero;
$numero++; // -- quer dizer incremento que soma uma unidade.
echo '<br>' . $numero;
$numero = 20;
echo '<br>' . $numero;
$numero -= 5;
echo '<br>' . $numero;
$numero += 5;
echo '<br>' . $numero;
$numero *= 10;
echo '<br>' . $numero;
$numero /= 2;
echo '<br>' . $numero;
$numero %= 5;
echo '<br>' . $numero;
$numero %= 6;
echo '<br>' . $numero;
$numero = 100;
$numero **= 4;
echo '<br>' . $numero;

$texto = 'esse é um texto';
echo '<br>' . $texto;
$texto =$texto . ' qualquer';// usando o ponto para contatenação
echo '<br>' . $texto;
$texto .='de verdade'; // contatenação com ponto antes da igualdade para abreviação
echo '<br>' . $texto;

// $variavelqualquer = 'valor existente';
echo '<br>' . $variavelqualquer;
$valor = $variavelqualquer ?? 'valor caso não tenha o valor da variavelqualquer';
echo '<br>' . $valor;
// acima temos um exemplo de atribuição para receber um 
//valor caso a variavel ainda nao tenha nenhum valor , ?? usado como 'if'.
?>