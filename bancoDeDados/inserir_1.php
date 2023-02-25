<div class="titulo">Inserir Registros 1</div>

<?php

require_once "conexao.php";

$sql = " INSERT INTO cadastro
            (nome, nascimento, email, site, filhos, salario)
            VALUES (
                'marco',
                '1989-10-29',
                'marco123@email.com',
                'https://marco123.sites.com.br',
                2,
                13000.85
                )";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if($resultado){
    echo "Sucesso, dados inseridos";
}else{
    echo "Erro ao inserir :". $conexao->error;
}

$conexao->close();