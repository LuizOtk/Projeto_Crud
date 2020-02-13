<?php
include 'conexao.php';

$sql = "DROP DATABASE MUSICA";

if(mysqli_query($conexao, $sql)) echo "Deu certo";
else echo "erro";

mysqli_close($conexao);
?>