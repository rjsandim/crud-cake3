<?php

namespace App\Controller;

class ProdutosController extends AppController {

	public function index() {
		$produtos = $this->Produtos->find('all');
		$this->set('produtos', $produtos);
	}

	public function adicionar() {

		$produto = $this->Produtos->newEntity();

		if ($this->request->is('post')) {

			$produto = $this->Produtos->patchEntity($produto, $this->request->data());

			if ($this->Produtos->save($produto)) {
				$this->Flash->success("Produto adicionado com sucesso!");

				return $this->redirect(['action' => 'index']);
			}

			$this->Flash->error('Produto não cadastrado!');
		}

		$this->set('produto', $produto);
	}

	public function editar($id) {

		$produto = $this->Produtos->get($id);

		if ($this->request->is('post')) {

			$produto = $this->Produtos->patchEntity($produto, $this->request->data());

			if ($this->Produtos->save($produto)) {
				$this->Flash->success("Produto editado com sucesso!");

				return $this->redirect(['action' => 'index']);
			}

			$this->Flash->error('Não foi possível editar o produto!');
		}

		$this->set('produto', $produto);
		$this->render('adicionar');
	}

	public function remover($id) {

		$produto = $this->Produtos->get($id);
		if ($this->Produtos->delete($produto)) {
			$this->Flash->success("Produto removido com sucesso!");
		} else {
			$this->Flash->error('Produto não removido!');
		}

		return $this->redirect(['action' => 'index']);
	}

	public function venda() {
		$produtos = $this->Produtos->find('all');
		$this->set('produtos', $produtos);
	}

}