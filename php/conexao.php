<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "ong_adocao";

$conexao = mysqli_connect($host, $usuario, $senha, $banco);

if (!$conexao) {
    die("Erro na conexão.");
}

?>