<table>

	<thead>
		<tr>
			<td>#</td>
			<td>Nome</td>
		</tr>

	</thead>
	<tbody>
	<? foreach ($clientes as $cliente) { ?>
		<tr>
			<td><?=$cliente->id;?></td>
			<td><?=$cliente->nome;?></td>
		</tr>
	<? } ?>
	</tbody>
</table>
