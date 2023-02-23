<div class="titulo">Laço for</div>

<?php
for ($cont = 1; $cont <=5; $cont++) {
    echo "$cont <br>";
}
echo'<hr>';
for (; $cont <=10; $cont++) {
    echo "$cont <br>";
}
echo'<hr>';
// echo '<br>';
$array = [1 => 'Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado'];

for($i = 1; $i <= count($array); $i++) {
    echo "{$array[$i]} <br>";
}
echo'<hr>';

$impressao = '';
for($cont = 0; $cont <= 5; $cont++) {
    $impressao .= '#';
    echo "$impressao <br>";
}
?>