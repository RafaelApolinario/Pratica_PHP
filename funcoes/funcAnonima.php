<div class="titulo">Funções Anonimas</div>

<?php
$soma =  function ($a, $b){ // uma função pode ser atribuida a uma variavel
    return $a + $b;
};

function executar($a, $b, $op, $funcao){
    $resultado = $funcao($a, $b);
    echo "$a $op $b = $resultado <br>";
};

executar(2, 5, '+', $soma);
executar(8, 5, '+', $soma);

$multiplicar =  function ($a, $b){
    return $a * $b;
};

executar(3,5,'x', $multiplicar);

 function divide($a, $b){
    return $a / $b;
};

executar(9,3,'%', 'divide');

?>