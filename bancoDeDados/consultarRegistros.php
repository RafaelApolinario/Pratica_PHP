<div class="titulo">Consultar registros</div>

<?php
require_once "conexao.php"; // pegando todo arquivo conexao.php 

$sql = "SELECT * FROM cadastro"; // query de consulta

$conexao = novaConexao();  // conexão com o servidor e usuario
$resultado = $conexao->query($sql); // resultado é igual a query dentro da conexão citada

$registros = []; // a variavel que vai ser inserido os dados precisa ser um array para poder empilhar os dados

if ($resultado) { // se o numero de colunas for maior q zero faça a logica
    while($row =  $resultado->fetch_assoc()) { //array associativo=um array chave valor, chave=o nome da coluna, valor=valor da coluna / 
        
        //dessa forma vai ser lido a tabela por linhas e armazenando na row
        
        //mysqli_fetch_assoc — Busca a próxima linha de um conjunto de resultados como um array associativo
        $registros[] = $row;// esta sendo lido um conjunto de rows e armazenando em $registros empilhando em array
    }
} elseif ($conexao->error){
    echo "Error: " . $conexao->error;
}

print_r($registros);

$conexao->close();

?>