<?php
include 'conexao.php';

$sql = "CREATE DATABASE MUSICA";

if(mysqli_query($conexao, $sql))	echo "Banco de Dados criado com sucesso!";
else echo "Falha na criação do Banco de Dados!" . mysqli_error($conexao);

mysqli_close($conexao); // encerrar conexão

?>