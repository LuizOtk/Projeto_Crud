<div class="container rounded nav nav-pills nav-stacked anyClass" style="background-color: #f5f5f5; height : 430px; width : 1500px;">
	
		<div class="row">
	
<?php
include 'conexao.php';

if($_POST){
	$instrumento = $_POST["instrumento"];
	$preco = $_POST["preco"];
	$cidade = $_POST["cidade"];
	$estado = $_POST["estado"];
	$disponivel = $_POST["disponivel"];
	$viagem = $_POST["viagem"];

	$sql = "SELECT * FROM ARTISTA 
			WHERE 	INSTRUMENTO LIKE '%$instrumento%' AND 
					PRECO LIKE '%$preco%' AND
					CIDADE LIKE '%$cidade%' AND
					ESTADO LIKE '%$estado%' AND
					DISPONIVEL LIKE '%$disponivel%' AND
					VIAGEM LIKE '%$viagem%'
			";
			
	$result = mysqli_query($conexao, $sql);

	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			echo 	"<div class='card-deck col-5 p-2' id='card-deck'>
						<div class='card'>
							<div class='card-header'><!--RESPONSAVEL PELO CABEÇÃLHO-->
								<h4 class='my-0 font-weight-normal text-center'>". $row['NOME'] ." </h4>
							</div>
						<div class='card-body rounded'>
							<h2 class='card-title pricing-card-title text-center'>R$".$row['PRECO']."<small class='text'>/SHOW</small></h2>
							<ul class='list-unstyled mt-3 mb-4'>
								<li>Instrumento: ". $row['INSTRUMENTO'] ." </li>
								<li>Cidade/Uf: ". $row['CIDADE'] ."/". $row['ESTADO'] ."  </li>
								<li>Disponível: ". $row['DISPONIVEL'] ." </li>								
								<li>Pode viajar: ". $row['VIAGEM'] ." </li>
							</ul>
							<button type='button' class='btn btn-lg btn-block btn-outline-dark' data-toggle='modal' data-target='#ModalLongoExemplo'>MAIS</button>
						</div>
					</div>					
					</div>
						";    
				}
    
} else {
    echo "Nenhum artista com essas características foi encontrado!";
}
}
mysqli_close($conexao);
?>
								
	</div>
</div>