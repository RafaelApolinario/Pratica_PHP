<div class="titulo">Operações Aritmétricas</div>

<?php
echo 1+1 ,'<br>';
var_dump(1+1);
echo 1 + 2.5 ,'<br>';
echo 10 - 2 ,'<br>';
echo 2 * 5,'<br>';
echo 7 / 4,'<br>';
echo intdiv(7, 4),'<br>'; // divisão de inteiros, nessa função vai ser retirado a casas decimais
echo round(7 / 4),'<br>'; // essa função arredonda o número
echo 7 % 4,'<br>'; // modulo da divisão e dado o resto é usado para saber se o numer é impar ou par
?>

<!-- // precedência de operadores:
// () => ** => / * % => + -  
// essa é as prioridades matemáticas respeitadas no codigo, assim como na matemática comum. -->