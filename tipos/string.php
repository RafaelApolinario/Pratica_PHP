<div class="titulo">Tipos de string</div>

<?php
echo 'Eu sou uma string';
echo '<br>';
var_dump("Eu tambem");
echo '<br>';

//contatenação

echo "Nós também" . 'somos'; // no php é usado o ponto ( . ) para contatenação e para somar strings em uma frase
echo '<br>', 'tambem aceito' , 'virgula';// aceito virgula no caso do echo

print ("<br> tambem existe a função print com parentese e aspas");
print "<br> tambem existe a função print sem parentese somente aspas";

echo '<br>'. strtoupper('maximizado'); // esta função deixa todas as letras maiusculas
echo '<br>'. strtolower('MINIMIZE'); // deixa todas as letras minusculas
echo '<br>'. ucfirst('deixa so a primeira letra maiusculas');
echo '<br>'. ucwords('Todas as palavras com a primeira letra maiusculas');
echo '<br>'. strlen('diz quantas letras tem na frase porem se tiver acento o acento conta como quantidade');
echo '<br>'. mb_strlen("diz quantas letras tem na frase ignorando o acento");

?>