<div class="titulo">Operadores Relacionais</div>

<?php

var_dump( 1==1 );
var_dump( 1 > 1 );
var_dump( 1 >= 1 );
var_dump( 1 < 1 );
var_dump( 1 <= 1 );
var_dump( 1 != 1 );
var_dump( 1 <> 1 );

var_dump(111 == '111'); //iguais
var_dump(111 === '111');// estritamente diferentes
var_dump(111 != '111');// não são diferentes 
var_dump(111 !== '111');// estritamente diferentes

echo "<p> Relacionais no if / else</p><hr>";

$idade = 75;
if ( $idade < 18 ) {
    echo "Menor de idade =  $idade anos.";
} else if ( $idade <= 65 ) {
    echo "Adulto = $idade anos.";
} else if ( $idade >65 ) {
    echo "Terceira idade = $idade anos.";
}

echo '<p>Spaceship</p><hr>';
var_dump( 5 <=> 3 );// o primeiro e maior q o segundo vai devolver int 1
var_dump( 50 <=> 50 );// o prime é igual ao segundo vai devolver int 0
var_dump( 5 <=> 50 );// o prime é menor que o segundo vai devolver int -1

echo '<p>como verificar se é verdadeiro ou falso</p><hr>';
var_dump(!!5); //v
var_dump(!!0);//f
var_dump(!!"");//f
var_dump(!!" ");//v
?>

<style>
p {
    margin-bottom: 0px;
}

hr {
    margin-top: 0px;
}

</style>