<?php

namespace App\Controller\Component;

use Cake\Controller\Component;

class CarrinhoComponent extends Component{

	private $nomeDaSessao;
	private $session;

	public function initialize(array $config) {
		parent::initialize($config);
		$this->nomeDaSessao = "CARRINHO";
		$this->session = $this->request->session();
	}

	public function adicionar($id, $quantidade) {

		$chave = $this->nomeDaSessao.'.'.$id;

		$quantidadeNoCarrinho = $this->session->read($chave);

		if ($quantidadeNoCarrinho == null) {
			$quantidadeNoCarrinho = 0;
		}

		$quantidadeTotal = $quantidade + $quantidadeNoCarrinho;

		$this->session->write($chave, $quantidadeTotal);
	}

	public function remover($id, $quantidade = null) {

		$chave = $this->nomeDaSessao.'.'.$id;

		$quantidadeNoCarrinho = $this->session->read($chave);

		if ($quantidade == null || $quantidadeNoCarrinho < $quantidade) {
			$this->session->delete($chave);
		} else {
			$quantidadeFinal = $quantidadeNoCarrinho - $quantidade;

			if ($quantidadeFinal == 0)
				return $this->session->delete($chave);

			$this->session->write($chave, $quantidadeFinal);
		}


	}

	public function listar() {
		return $this->session->read($this->nomeDaSessao);
	}

	public function getItens() {
		return array_keys($this->session->read($this->nomeDaSessao));
	}

	public function numeroDeItensNoCarrinho() {
		if (!$this->temItens()) {
			return 0;
		}

		$itens = $this->listar();

		$total = 0;
		foreach ($itens as $quantidade) {
			$total += $quantidade;
		}

		return $total;
	}

	public function temItens() {
		return count($this->session->read($this->nomeDaSessao));
	}

	public function apagar() {
		$this->session->delete($this->nomeDaSessao);
	}

}