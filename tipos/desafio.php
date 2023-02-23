<div class="titulo">Desafio String</div>

<?php

//enunciado:
//avaliar os metodos da documentação da string
// qual metodo que posição do textp 'abc'
//na string '!AbcBcabc' retorne 1?
 echo strpos('!AbcBcabc' , 'abc') . '<br>';  // com essa função voce vai saber a partir de qual indice foi encontrado a srting 'abc'
 echo stripos('!AbcBcabc' , 'abc') . '<br>'; // com essa função vai ignorar se a letra é maiusculas ou minusculas
 echo strpos(strtolower('!AbcBcabc'), 'abc') . '<br>';//nesse caso usamos a função de deixar todas a letras minusculas para depois fazer a procura da string

?>