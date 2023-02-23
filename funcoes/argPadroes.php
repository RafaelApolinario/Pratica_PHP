<div class="titulo">Argumento Padrão</div>

<?php   
    function saudacao($pessoa='Senhor(a)', $cliente='Prezado(a)'){// dessa forma caso não for passado valor nos argumentos vai aparecer o valores citados nos argumentos.
        echo "Bem vindo , $pessoa $cliente!<br>";
    };
saudacao(); // resultado vai ser "Bem vindo , Senhor(a) Prezado(a)!"
saudacao('Maria');//Bem vindo , Maria Prezado(a)!
saudacao('jose', 'empresario');//"Bem vindo , jose empresario!"
saudacao(null);//Bem vindo , Prezado(a)!
saudacao(null,null);//Bem vindo , !

function anotarPedido($comida, $bebida = 'Agua'){
    echo "$comida para comer ";
    echo "e $bebida para beber";
};

echo '<br>';
anotarPedido('carne');//carne para comer e Agua para beber
echo '<br>';
anotarPedido('pão','suco'); //pão para comer e suco para beber

//TIPAGEM

function somar2($a, $b) : int { // esta tipagem serve para dizer que o retorno deve ser inteiro
    echo "<span>Soma $a + $b = </span>";
    return $a + $b;
};

function somar3(int $a, int $b) { // esta tipagem serve para dizer que os numeros do argumento tem que ser inteiros
    echo "<span>Soma $a + $b = </span>";
    return $a + $b;
};

?>