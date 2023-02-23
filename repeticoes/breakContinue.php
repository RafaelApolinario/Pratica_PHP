<div class="tiitulo">break/Continue</div>

<?php
$cont = 16;
for(;;){// quando não e colocado uma logica dentro do paramentro da função 
//for é necessario colocar dentro da logica apos o for
echo "$cont <br>";
    $cont++; //incremento
    if ($cont > 20){ // se $cont maior que 20 executar break que quer dizer para sair da função
        break;
    }
}
echo '<br><hr><br>';
for (;;){
    $cont++;
    if ($cont % 2 === 1){// a divivisão de cont por 2 restar 1 vai entrar na condição "continue" 
        //que quer dizer pra não imprimir e pular para o proximo, neste caso vai aparecer somente os numeros pares.
        continue;
    }
    echo "$cont <br>";
    if($cont >= 30){
        break;
    }
}

foreach(array (1,2,3,4,5,6) as $valor){
    if($valor === 5)break;
    if($valor % 2 === 0) continue; 
    // neste caso vai mostrar somente os impares dentro do array, 
    //quando numero dividido por dois for igual a 0 vai pular(continue) ou seja vai pular os pares
}// valor é tudo que esta dentro dos parenteses.

echo "fim";
?>