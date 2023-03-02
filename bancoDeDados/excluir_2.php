<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="titulo">Excluindo registros</div>

<?php
require_once "conexao.php";

$conexao = novaConexao();

if($_GET['excluir']){ // aqui estamos fazendo uma logica para excluir uma linha da tabela pelo ID, usando o link q esta sendo gerado quando apertamos o botão EXCLUIR
    $excluirSQL = "DELETE FROM cadastro WHERE id = ?";
    $stmt = $conexao->prepare($excluirSQL); //stmt = Prepara uma declaração SQL para execução//prepare() = Prepara uma instrução para execução e retorna um objeto de instrução
    $stmt->bind_param("i", $_GET['excluir']); // bind_param = Passa variáveis para um preparado comando como parâmetros
    $stmt->execute();
}

$sql = "SELECT id, nome, email, nascimento FROM cadastro";
$resultado = $conexao->query($sql);

if ($resultado->num_rows > 0) {
    echo "Sucesso :)";
} else {
  echo "Error:" . $conexao->error;
};

$registros = [];

if($resultado){
    while($row = $resultado->fetch_assoc()){
        $registros []= $row;
    }
} elseif ($conexao->error){
    echo "Error: " . $conexao->error;
}
$conexao->close();
?>
<table class="table table-houver table-striped">
    <thead>
        <th>Nome</th>
        <th>Email</th>
        <th>Nascimento</th>
        <th>Ações</th>
    </thead>
    <tbody>
        <?php foreach ($registros as $registro) : ?>
            <tr>
                <td><?= $registro['id'] ?></td>
                <td><?= $registro['nome'] ?></td>
                <td><?= $registro['email'] ?></td>
                <td><?= date('d/m/y', strtotime($registro['nascimento'])); ?></td>
                <td>
                    <a 
                    class="btn btn-danger" href="/exercicio.php?dir=bancoDeDados&file=excluir_2&excluir=<?= $registro['id']  ?>"
                    role="button">Excluir
                    </a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
</table>