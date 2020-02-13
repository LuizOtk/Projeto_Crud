<?php
include 'conexao.php';

$sql = "CREATE TABLE ARTISTA(
            ID INT PRIMARY KEY AUTO_INCREMENT,
            NOME VARCHAR(35),
            LOGIN VARCHAR(32),
            SENHA VARCHAR(32),
            INSTRUMENTO VARCHAR(25),
            IDADE INT,
            DISPONIVEL VARCHAR(3),
            CIDADE VARCHAR(25),
            ESTADO VARCHAR(2),
            CONTATO VARCHAR(17),
            VIAGEM VARCHAR(3),
            PRECO DOUBLE
        )";
			
if(mysqli_query($conexao, $sql)) echo "Tabela criada com sucesso";
else echo "Falha na criação da tabela" . mysqli_error($conexao);

mysqli_close($conexao); // encerra a conexão
?>