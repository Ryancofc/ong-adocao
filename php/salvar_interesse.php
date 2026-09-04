<?php

include 'conexao.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];

$sqlInteressado = "
INSERT INTO interessado (nome, email, telefone)
VALUES ('$nome', '$email', '$telefone')
";

mysqli_query($conexao, $sqlInteressado);

$idInteressado = mysqli_insert_id($conexao);

$sqlInteresse = "
INSERT INTO interesse (
    mensagem,
    id_interessado,
    id_animal
)
VALUES (
    '$mensagem',
    '$idInteressado',
    1
)
";

mysqli_query($conexao, $sqlInteresse);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">

    <title>Sucesso</title>

    <link rel="stylesheet" href="../css/style.css">
</head>
<body>  

    <div class="mensagem-sucesso">

        <h1>Interesse enviado com sucesso!</h1>

        <a href="../index.html">
            Voltar para Home
        </a>

    </div>

</body>
</html>