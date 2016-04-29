<table>

	<thead>
	<tr>
		<td>#</td>
		<td>Cliente</td>
		<td>Vendedor</td>
		<td>Valor Total</td>
		<td>Data Compra</td>
	</tr>

	</thead>
	<tbody>
	<? foreach ($compras as $compra) { ?>
		<tr>
			<td><?=$compra->id;?></td>
			<td><img src="files/compras/imagem/<?=$compra->imagem_dir?>/<?=$compra->imagem?>"></td>
			<td><?=$compra->vendedor->nome;?></td>
			<td><?=$compra->valor_total;?></td>
			<td><?=$compra->created;?></td>
		</tr>
	<? } ?>
	</tbody>
</table>
