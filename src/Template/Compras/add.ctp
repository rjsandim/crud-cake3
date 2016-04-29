<form method="POST" enctype="multipart/form-data" >

	<select name="cliente_id">
		<? foreach ($clientes as $id => $nome) { ?>
			<option value="<?=$id?>"><?=$nome?></option>
		<? } ?>
	</select>

	<select name="vendedor_id">
		<? foreach ($vendedores as $id => $nome) { ?>
			<option value="<?=$id?>"><?=$nome?></option>
		<? } ?>
	</select>

	<input type="text" name="valor_total">
	<input type="file" name="imagem">
	<input type="submit" value="Salvar">
</form>