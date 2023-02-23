<div class="titulos">Argumentos e retornos</div>

<?php
function obterMensagem() {
    return ' Seja bem vindo ';
}
obterMensagem(); // com o retorno nao vai ser imprimido nada somente com echo
$m = obterMensagem();// se atribuirmos a função a uma variavei ai sim conseguimos imprimir
echo $m;
//esse exemplo e so para ver como o return comporta

function obterMensagemComNome($nome) { // essa é uma forma personalisada de atribui um argumento em uma função
    return "bem vindo, {$nome}";
}
echo '<br>' ,obterMensagemComNome('Rafael'); // a frase bem vindo vai ter o nome que for colocado no argumento.

function soma($a, $b) {
    return $a + $b;
}

echo '<br>', soma(4, 5);
echo '<br>', soma(45, 78);

function trocaValor($a, $novoValor) {
    $a = $novoValor;
}
$variavel = 1;
TrocaValor($variavel, 3);//1
echo '<br>', $variavel;
// este exemplo so serve para mostrar que a variavel fora da função nao muda a variavel dentro do argumento a nao ser que use &
function trocaValorDeVerdade(&$a, $novoValor){// com & antes da variavel deixa a variavel global e pode ser alterada
    $a = $novoValor;
}
TrocaValorDeVerdade($variavel, 5000); //5000
    echo '<br>', $variavel;
?>

