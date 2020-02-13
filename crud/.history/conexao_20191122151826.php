<?php
$servidor = "localhost";
$usuario = "root";
$senha = "minas"; //minas


$conexao = mysqli_connect($servidor, $usuario, $senha);
mysqli_set_charset($conexao, "utf8");

if(!$conexao)
	echo "Falha na conexão do Database!" . mysqli_connect_error();
else
	//echo "Conexão bem-sucedida!";

?>