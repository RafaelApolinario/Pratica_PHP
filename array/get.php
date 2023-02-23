<div class="titulo">$_GET</div>
<?php
// $_GET — variáveis ​​HTTP GET

// Uma matriz associativa de variáveis ​​passadas para o script atual por meio dos parâmetros de URL 
// (também conhecido como string de consulta). Observe que a matriz não é preenchida apenas para solicitações GET, 
// mas também para todas as solicitações com uma string de consulta.

// exemplo:
// <?php
// echo 'Hello ' . htmlspecialchars($_GET["name"]) . '!';
// 
// Supondo que o usuário digitou http://example.com/?name=Hannes

// O exemplo acima produzirá algo semelhante a:

// Olá Hanes!

print_r($_GET);
echo "<br>{$_GET['nome']}";
?>