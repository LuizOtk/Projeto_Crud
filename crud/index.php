<?php
session_start();

include 'conexao.php';

if(empty($_SESSION["login"])){
	echo "<script>alert('Faça o login primeiramente!')</script>";
	header("Location:login.php");
}

$login = $_SESSION["login"];

$sql = "SELECT * FROM ARTISTA WHERE LOGIN LIKE '$login'";

// executa o comando SQL e armazena na variável resultado
$resultado = mysqli_query($conexao, $sql);

// armazena em um vetor as informações recebidas do SELECT
$vetor = mysqli_fetch_array($resultado);

// armazena em variáveis as informações do Banco de Dados
$nome = $vetor["NOME"];
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>		
		<title>Seja Bem-vindo</title>
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
			background-color: #2A2D34;
            font-family:courier,arial,helvetica;
		}
		#input {
			background-color : #f5f5f5;
		}
		#card-deck {
			margin : 30px; 
		}
		.card {
			width : 350px;
			height : 350px;			
			padding : 10px;
			background-color: #2A2D34;
			
		}
		.card-header {
			color : #f5f5f5;
			background-color : #2A2D34;
		}
		.card-body {
			color : #2A2D34;
			background-color : #f5f5f5;
		}
		#button {
			display: block;			
			text-align: center;			
		}
		#navbar {
			background-color : #f5f5f5;
		}
		#navbutton {
			background-color : #2A2D34;
			color : #f5f5f5;
		}
		.anyClass {
			height:150px;
			overflow-y: scroll;
		}
		</style>
  </head>

  <body>
    
    <div class="container-fluid">
	<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 border-bottom shadow-sm" id="navbar">
      <h3 class="my-0 mr-md-auto font-weight-normal">MUSIC NETWORK  - <?php echo $nome;?></h3>
      <nav class="my-2 my-md-0 mr-md-3">
				<a class="btn" id="navbutton" href="perfil.php">PERFIL</a>
				<a class="btn" id="navbutton" href="logout.php">SAIR</a>
      </nav>    
	</div> 
	<div class="container-fluid">
		
        <div class="row pt-3 " >
			<div class="col-3">
				<?php include 'filtro.php'; ?>				     
			</div>
		<div class="col-9">
			<?php include 'container_index.php'; ?>
		</div>
		</div>
  	</div><!-- fim class container -->	
    <?php include 'footer/footer.php';?>
	<!-- documentos javascript -->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
  </body>
</html>