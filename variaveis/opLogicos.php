<div class="titulo">operadores Lógicos</div>

<?php
echo "<p>tabela verdade 'and' (E)</p><hr>";
var_dump(true && false);//f
var_dump(true && true);//v
var_dump(false && false);//f
var_dump(true && true && 3 > 2 && 7 <= 7 && 3 === "3");//f neste caso todos são verdadeiros menos o 3 estritamente igual a 3
// esse operador && quer dizer que para retornar verdadeiros todas condições tem q ser verdadeiros.

echo "<p>tabela verdade 'or' (ou)</p><hr>";
var_dump(true || false);//v
var_dump(true || true);//v
var_dump(false || false);//f
// nessa logica se algumas das opções for verdadeiras o retorno sera verdadeiro , para ser falso os dois tem q ser falso

?>

<style>
p {
    margin-bottom: 0px;
    font-weight: bolt;
}

hr {
    margin-top: 0px;
}

</style>