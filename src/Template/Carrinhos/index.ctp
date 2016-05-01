<h1>Produtos no Carrinho</h1>
<a href="produtos/venda">
	<button>Continuar Comprando</button>
</a>
<table>
	<thead>
	<tr>
		<th>#</th>
		<th>Nome</th>
		<th>Preço</th>
		<th>Quantidade</th>
		<th>Subtotal</th>
		<th>Ações</th>
	</tr>
	</thead>
	<tbody>
	<? $total = 0; ?>
	<? foreach ($produtos as $produto) { ?>
		<tr>
			<td><?= $produto->id; ?></td>
			<td><?= $produto->nome; ?></td>
			<td><?= $this->Dinheiro->formata($produto->preco); ?></td>
			<td><?= $carrinho[$produto->id]; ?></td>
			<td>
				<?
				$subtotal = $produto->preco * $carrinho[$produto->id];
				$total += $subtotal;
				echo $this->Dinheiro->formata($subtotal)
				?>
			</td>
			<td><a href="carrinhos/remover/<?= $produto->id ?>">x</a></td>
		</tr>
	<? } ?>
	</tbody>
	<tfoot>
	<tr>
		<td colspan="4">Total</td>
		<td colspan="2"><?=$this->Dinheiro->formata($total); ?></td>
	</tr>
	</tfoot>
</table>

<a href=" carrinhos/apagar">
	<button>Apagar Carrinho</button>
</a>

<a href="carrinhos/salvarCompra">
	<button>Finaliza Venda</button>
</a>

