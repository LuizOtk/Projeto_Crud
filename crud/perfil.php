<?php
session_start();

include 'conexao.php';

// armazena na variável sessão com nome ID
$login = $_SESSION["login"];

$sql = "SELECT * FROM ARTISTA WHERE LOGIN LIKE '$login'";

// executa o comando SQL e armazena na variável resultado
$resultado = mysqli_query($conexao, $sql);

// armazena em um vetor as informações recebidas do SELECT
$vetor = mysqli_fetch_array($resultado);

// armazena em variáveis as informações do Banco de Dados
$nome = $vetor["NOME"];
$instrumento = $vetor["INSTRUMENTO"];
$idade = $vetor["IDADE"];
$disponivel = $vetor["DISPONIVEL"];
$cidade = $vetor["CIDADE"];
$estado = $vetor["ESTADO"];
$contato = $vetor["CONTATO"];
$viagem = $vetor["VIAGEM"];
$preco = $vetor["PRECO"];

if($_POST){
  if($_POST["salvar"]){
      $nome = $_POST["nome"];
      $senha = md5($_POST["senha"]);
      $instrumento = $_POST["instrumento"];
      $idade = $_POST["idade"];
      $disponivel = $_POST["disponivel"];
      $cidade = $_POST["cidade"];
      $estado = $_POST["estado"];
      $contato = $_POST["contato"];
      $viagem = $_POST["viagem"];
      $preco = $_POST["preco"];

      $sql = "UPDATE ARTISTA
              SET NOME = '$nome',
                  SENHA = '$senha',
                  INSTRUMENTO = '$instrumento',
                  IDADE = '$idade',
                  DISPONIVEL = '$disponivel',
                  CIDADE = '$cidade',
                  ESTADO = '$estado',
                  CONTATO = '$contato',
                  VIAGEM = '$viagem',
                  PRECO = '$preco'
              WHERE LOGIN = '$login'
              ";

      $resultado = mysqli_query($conexao, $sql);

      if(mysqli_query($conexao, $sql))	echo "<script>alert('Edição realizada com sucesso!')</script>";
    else echo "Falha na Edição! Verifique!" . mysqli_error($conexao);
  }
  if($_POST["excluir"]){
    $sql = "DELETE FROM ARTISTA
            WHERE LOGIN = '$login'";

    session_destroy();

    if(mysqli_query($conexao, $sql))	echo "<script>alert('Exclusão realizada com sucesso!')</script>";
    else echo "Falha na exclusão! Verifique!" . mysqli_error($conexao);
    
    header("Location:login.php");
  }
}

mysqli_close($conexao);
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
			background-color: #2A2D34;
            font-family:courier,arial,helvetica;
		}
		#button {
				background-color : #2A2D34;
				border-color : #2A2D34;
				color : #f5f5f5;
		}
		#navbar {
			background-color : #f5f5f5;
		}
		</style>
  </head>

  <body>
    
    <form action="" method="POST">
    <div class="container-fluid">
        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 border-bottom shadow-sm" id="navbar">   
            <h4 class="my-0 mr-md-auto font-weight-normal">PERFIL DO ARTISTA</h4>
            <nav class="my-2 my-md-0 mr-md-3">
				<a class="btn" id="button" href="index.php">PRINCIPAL</a>
				<a class="btn" id="button" href="logout.php">SAIR</a>
      </nav>    
    </div>
    <br>

    <form action="" method="POST">
    <div class="container rounded " style="background-color: #f5f5f5; padding-bottom: 35px; padding-top: 35px;">
        <div class="py-5 text-center">
            <h2>Perfil</h2>
                <p>Novas informações? Atualize seu perfil</p>
        </div>
      <div class="row">
        <div class="col-1">
          
        </div>
      <div class="col-4 p-0">
        <label for="nome">Nome Completo</label>
        <input type="text" class="form-control " name="nome" id="nome" placeholder="" value="<?php echo $nome;?>" >
      </div>
      <div class="col-2 p-0">
        
      </div>
      <div class="col-4 p-0">
        <label for="cidade">Cidade</label>
        <input type="text" class="form-control" name="cidade" id="cidade" placeholder="" value="<?php echo $cidade;?>" required>
      </div>
    </div>

        <div class="row">
          <div class="col-1">
            
          </div>
          <div class="col-4 p-0">
            <label for="login">Login</label>
            <input type="text" class="form-control" name="login" id="login" placeholder="" value="<?php echo $login;?>" disabled>
          </div>
          <div class="col-2">
            
          </div>
          <div class="col-4 p-0">
            <label for="estado">Estado</label>
                <select class="form-control" name="estado" id="estado" value="<?php echo $estado;?>">
                    <option value="ac">AC</option>
                    <option value="al">AL</option>
                    <option value="ap">AP</option>
                    <option value="am">AM</option>
                    <option value="ba">BA</option>
                    <option value="ce">CE</option>
                    <option value="df">DF</option>
                    <option value="es">ES</option>
                    <option value="go">GO</option>
                    <option value="ma">MA</option>
                    <option value="ms">MS</option>
                    <option value="mt">MT</option>
                    <option value="mg">MG</option>
                    <option value="pa">PA</option>
                    <option value="pb">PB</option>
                    <option value="pr">PR</option>
                    <option value="pe">PE</option>
                    <option value="pi">PI</option>
                    <option value="rj">RJ</option>
                    <option value="rn">RN</option>
                    <option value="ro">RO</option>
                    <option value="rr">RR</option>
                    <option value="rs">RS</option>
                    <option value="sc">SC</option>
                    <option value="sp">SP</option>`
                    <option value="to">TO</option>
                    <option value="se">SE</option> 
                </select>
          </div>
        </div>

        <div class="row">
          <div class="col-1">
            
          </div>
          <div class="col-4 p-0">
            <label for="senha">Senha</label>
            <input type="password" class="form-control" name="senha" id="senha" placeholder="Nova Senha">
          </div>
          <div class="col-2">
            
          </div>
          <div class="col-4 p-0">
            <label for="instrumento">Instrumento</label>
                <select class="form-control" name="instrumento" id="instrumento" value="<?php echo $instrumento;?>">
                    <option value="vocalista">Vocalista</option>
                    <option value="violao">Violão</option>
                    <option value="guitarra">Guitarra</option>
                    <option value="bateria">Bateria</option>
                    <option value="teclado">Teclado</option>
                    <option value="percussao">Percussão</option>
                    <option value="contrabaixo">Contrabaixo</option>
                    <option value="baixo">Baixo</option>
                    <option value="cavaquinho">Cavaquinho</option>
                    <option value="pandeiro">Pandeiro</option>
                </select>
          </div>
        </div>
        <div class="row">
          <div class="col-1">
            
          </div>
          <div class="col-4 p-0">
             <label for="contato">Contato</label>
              <input type="text" class="form-control" name="contato" id="contato" maxlength="15" value="<?php echo $contato;?>" required>
          </div>
          <div class="col-2">
            
          </div>
          <div class="col-4 p-0">
            <label for="idade">Idade</label>
            <input type="number" class="form-control" name="idade" id="idade" placeholder="" value="<?php echo $idade;?>" required>
          </div>
        </div>
        <div class="row">
          <div class="col-1">
            
          </div>
          <div class="col-4 p-0">
            <label for="preco">Preço por Show (em R$)</label>
            <input type="number" class="form-control" name="preco" id="preco" placeholder="" value="<?php echo $preco;?>" required>
          </div>
          <div class="col-2">
            
          </div>
          <div class="col-2 p-0">
            <label for="viagem">Disponível para Viagens?</label><br>
            <input type="radio"  name="viagem" value="nao" id="viagem" placeholder="" <?php if($viagem == "nao") echo "checked" ?>>Não<br>
            <input type="radio"  name="viagem" value="sim" id="viagem" placeholder="" <?php if($viagem == "sim") echo "checked" ?>>Sim
          </div>
          <div class="col-2 p-0">
            <label for="disponivel">Disponível para Shows?</label><br>
            <input type="radio"  name="disponivel" value="nao" id="disponivel" placeholder="" <?php if($disponivel == "nao") echo "checked" ?>>Não<br>
            <input type="radio"  name="disponivel" value="sim" id="disponivel" placeholder="" <?php if($disponivel == "sim") echo "checked" ?> >Sim
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <br>
          </div>
        </div>
        
        <div class="row">
          
       
          <div class="col-1">
            
          </div>
          <div class="col-4 p-0" >
            <input type="submit" class="btn btn-block" name="excluir" id="button" value="EXCLUIR CONTA">            
          </div>
          <div class="col-2 p-0">
          </div>
          <div class="col-4 p-0" >
            <input type="submit" class="btn btn-block" name="salvar" id="button" value="SALVAR ALTERAÇÕES">            
          </div>
        </div> 
  	</div><!-- fim class container -->
    </form>	
    <?php include 'footer/footer.php';?>
	<!-- documentos javascript -->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
  </body>
</html>