<form action="index.php" method="POST">
	<div class="input-group input-group mb-0 mt-0 ">
		<div class="input-group-prepend">
			<span class="input-group-text" id="inputGroup-sizing-sm">Instrumento</span>
		</div>
		<input type="text" name="instrumento" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
	</div><br>
				
	<div class="input-group input-group mb-0">
		<div class="input-group-prepend">
			<span class="input-group-text" id="inputGroup-sizing-sm">Preço(R$)</span>
		</div>
		<input type="number" name="preco" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
	</div><br>
				
	<div class="input-group input-group mb-0">
		<div class="input-group-prepend">
			<span class="input-group-text" id="inputGroup-sizing-sm">Cidade</span>
		</div>
		<input type="text" name="cidade" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
	</div><br>
				
	<div class="input-group mb-0 ">
		<div class="input-group-prepend">
			<label class="input-group-text" for="inputGroupSelect01">Estado</label>
		</div>
		<select class="custom-select" name="estado" id="inputGroupSelect01">
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
			<option value="sp" selected>SP</option>`
			<option value="to">TO</option>
			<option value="se">SE</option> 
		</select>
	</div><br>

	<div class="input-group mb-0">
	  <div class="input-group-prepend">
		<label class="input-group-text" for="inputGroupSelect01">Disponível?</label>
	  </div>
	  <select class="custom-select" name="disponivel" id="inputGroupSelect01">
		<option value="sim" selected>Sim</option>
		<option value="nao">Não</option>
	  </select>
	</div><br>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
		<label class="input-group-text" for="inputGroupSelect01">Pode Viajar?</label>
	  </div>
	  <select class="custom-select" name="viagem" id="inputGroupSelect01">
		<option value="sim" selected>Sim</option>
		<option value="nao">Não</option>
	  </select>
	</div><br>
	
	<div class="input-group input-group mb-0"></div>
	
	<button type="submit" class="btn btn-light input-group mb-0" id="button">Pesquisar</button>
</form>