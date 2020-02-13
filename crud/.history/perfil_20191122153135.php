<?php
session_start();

include 'conexao.php';

if(empty($_SESSION["login"])){
	echo "<script>alert('Faça o login primeiramente!')</script>";
	header("Location:login.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Perfil</title>
		<!-- Meta tags Obrigatórias -->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Arquivo CSS Bootstrap -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<!-- Arquivo CSS do projeto -->
		<link rel="stylesheet" href="css/estilo.css" />
    <link rel="stylesheet" type="text/css" href="css/stylesheets.css">
		<!-- CSS interno -->
		<style>
		.container {
			max-width: 950px;
      
		}
		body {
			
            font-family:courier,arial,helvetica;
		}
		</style>
  </head>

  <body>
    
    <div class="container-fluid">
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">   
  	</div><!-- fim class container -->	
    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; Etec Dr. Demétrio Azevedo Jr. - Técnico em Desenvolvimento de Sistemas</p>
      </footer>
	<!-- documentos javascript -->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
  </body>
</html>