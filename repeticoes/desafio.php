<div class="titulo">Desafio</div>

<?php
$array = [
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE",
    "FFFF"
];

for ($i = 0; $i <= count($array); $i++) { 
    if($i % 2 === 1) continue;
    echo "{$array[$i]} <br>";
};
echo '<br><hr><br>';
$array2 = [
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE",
    "FFFF"
];

foreach($array2 as $indice => $letras){
    if($indice % 2 === 1) continue;
    echo "$letras <br>";
};



?>