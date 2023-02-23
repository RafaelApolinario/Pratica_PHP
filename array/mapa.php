<div class="titulo">Mapa</div>

<?php
$dados = array(
    "idade" => 25,
    "cor" => "verde",
    "peso" => 49.8
);

print_r($dados);

// para acessar um array especifico :
echo '<br>' . $dados["idade"]; // = 25
echo '<br>' . $dados["cor"]; // = verde
echo '<br>' . $dados["peso"]; // = 49.8
echo '<br>';
// para adicionar um elemento no array ja existente :
$dados['sexo'] = 'Feminino';
echo '<br>';
print_r($dados);

?>