<h1>Produtos a Venda</h1>


<style>
	.box-produto {
		width: 280px;
		display: inline-block;
	}
</style>


<? foreach ($produtos as $produto) { ?>
	<div class="box-produto">
		<img src="http://lorempixel.com/200/250/technics/">
		<div><?=$produto->nome;?></div>
		<div><?=$this->Dinheiro->formata($produto->preco);?></div>
		<a href="carrinhos/adicionar/<?=$produto->id?>"><button>Adicionar Carrinho</button></a>
	</div>
<? } ?>