<h1>Listagem de Produtos</h1>
<a href="produtos/adicionar"><button>Adicionar</button></a>
<table>
	<thead>
		<tr>
			<th>#</th>
			<th>Nome</th>
			<th>Preço</th>
			<th>Ações</th>
		</tr>
	</thead>
	<tbody>
	<? foreach ($produtos as $produto) { ?>
		<tr>
			<td><?=$produto->id;?></td>
			<td><?=$produto->nome;?></td>
			<td><?=$this->Dinheiro->formata($produto->preco);?></td>
			<td><a href="produtos/editar/<?=$produto->id?>">editar</a> <a href="produtos/remover/<?=$produto->id?>">remover</a></td>
		</tr>
	<? } ?>
	</tbody>
</table>



