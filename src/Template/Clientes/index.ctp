<!-- percebam que na busca nao precisamos passar os dados por post, get é suficiente. Outra vantagem é que o
 cliente pode usar o link para buscar, por exemplo: http://localhost/crud/clientes/buscar?nome=fulano -->

<form action="clientes/buscar">
	<input name="nome" type="text" placeholder="busque pelo nome do cliente">
	<button>Buscar</button>
</form>



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
