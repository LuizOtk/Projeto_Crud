<?php
session_start();

include 'conexao.php';

if($_POST){
	$login = $_POST["login"];
	$senha = md5($_POST["senha"]);

	$sql = "SELECT * FROM ARTISTA WHERE LOGIN = '$login' AND SENHA = '$senha'";
	$resultado = mysqli_query($conexao, $sql);

	if(mysqli_num_rows($resultado) == 1){
		$_SESSION["login"] = $login;
		header("Location:index.php");
	}
	else{
		echo "<script>alert('Login e/ou Senha incorretos!)</script>";
	}
}
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>LOGIN DO USUÁRIO</title>
		<!-- Meta tags Obrigatórias -->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Arquivo CSS Bootstrap -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<!-- Arquivo CSS do projeto -->
		<link rel="stylesheet" href="css/estilo.css" />
		<!-- CSS interno -->
		<style>
			body {
			  
			  
			  -ms-flex-align: center;
			  align-items: center;
			  padding-top: 200px;
			  padding-bottom: 50px;
			  background-color:#2A2D34 ;
			  
			}

			.container{
			 background-color:#f5f5f5 ;
			 width: 350px;
			 height: 350px;
			}			
			#button {
				background-color : #2A2D34;
				border-color : #2A2D34;
			}
		</style>	
	</head>
	<body>
	<div class="container rounded">
	
		<form class="form-signin" action="" method="post">
      	  <h1 class="h3 font-weight-normal mb-5">Login do Artista</h1>
		  <input type="text" name="login" id="inputLogin" class="form-control mb-2" placeholder="Seu login" required autofocus>
		  <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required>
		  
		  <button class="btn btn-lg btn-primary btn-block" id="button" type="submit">Acessar</button>
		  <div class="semcadastro">
			<p>Não tem acesso?<a href="cadastro.php" id="link"> Faça seu cadastro!</a></p>
		  </div>
		</form>
				
		
	</div><!-- fim class container -->	
	
	<?php include 'footer/footer.php';?>
	
	<!-- documentos javascript -->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	</body>
</html>
