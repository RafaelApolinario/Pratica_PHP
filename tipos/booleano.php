<div class="titulo">Tipo booleano</div>

<?php

echo TRUE;
echo '<br>';
echo FALSE;

echo '<br>' . var_dump(true);
echo '<br>' . var_dump(false);
echo '<br>' . is_bool(false); // serve para ver se o valor dentro do parentese é booleano

//fazer as regras de conversões
echo '<p>Regras:</p>';
echo '<br>' . var_dump((bool)0);// zero é retornado com falso
echo '<br>' . var_dump((bool)""); // string vazia tbm é retornado falso

