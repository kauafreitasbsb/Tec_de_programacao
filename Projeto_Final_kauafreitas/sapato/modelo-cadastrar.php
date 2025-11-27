<h1>Cadastrar Modelo</h1>				
<form action="?page=modelo-salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Marca</label>
		<select name="marca_id_marca" class="form-control">
			<option>-Selecione-</option>
			<?php 
				$sql = "SELECT * FROM marca";
				$res = $conn->query($sql);
				if ($res->num_rows > 0) {
					while ($row = $res->fetch_object()) {
						print "<option value= '".$row->id_marca."''>".$row->nome_marca."</option>";
					}
				}else{
					print "<option>Não há marcas cadastradas</option>";
				}
			 ?>
		</select>
	</div>
	<div class="mb-3">
		<label>Nome</label>
		<input type="text" name="nome_modelo" class="form-control">
	</div>
	<div class="mb-3">
		<label>Cor</label>
		<input type="text" name="cor_modelo" class="form-control">
	</div>
	<div class="mb-3">
		<label>Categoria</label>
		<input type="text" name="categoria_modelo" class="form-control">
	</div>
	<div class="mb-3">
		<label>Genêro</label>
		<input type="text" name="genero_modelo" class="form-control">
	</div>
	<div class="mb-3">
		<label>Tamanho</label>
		<input type="number" name="tamanho_modelo	" class="form-control">
	</div>
	<div class="mb-3">
		<label>Preço</label>
		<input type="number" step="any" name="preco_modelo" placeholder="R$ 0,00" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-sucess">Enviar</button>		
	</div>


</form>