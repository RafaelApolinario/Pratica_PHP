<div class="titulo">Map e filter</div>

<?php
/////MAP//////// transforma o valor recebido em outro de acordo com a função
$diarioDeNotas = [7.5, 9.1, 4.3, 3,8, 5,2 ];
$notasFinais = []; //array vazio para receber as notas finais.

foreach($diarioDeNotas as $nota){
    $notasFinais[] = round($nota);
};
print_r($notasFinais);

echo '<br>';
// substituindo foreach por map
$notasFinais2 = array_map('round', $notasFinais); // primeiro a função como argumento e depois o array que vai ser aplicado a função.
print_r($notasFinais2);


$apenasOsAprovados1 = [];
foreach($diarioDeNotas as $nota){
    if($nota >= 7 ) {
        $apenasOsAprovados1[] = $nota;
    }
}
echo '<br>';
print_r($apenasOsAprovados1);

///FILTER////// filtra os dados de verdadeiro ou falso
function aprovados($nota){
    return $nota >= 7;
};
echo '<br>';
$apenasOsAprovados2 = array_filter($diarioDeNotas, 'aprovados');// no filter e necessario fazer a função antes, agumento é variavel depois função.
print_r($apenasOsAprovados2);

function professorLegal($nota){
    $notaFinal = round($nota) + 1;
    return $notaFinal > 10 ? 10 : $notaFinal;
};

$notasComMaisUm = array_map('professorLegal',$diarioDeNotas);

echo '<br>';

print_r($notasComMaisUm);

?>