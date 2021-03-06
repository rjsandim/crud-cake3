<?php
namespace App\Controller;

use Cake\Event\Event;
use App\Model\Table\ComprasTable;
use DateTime;

class ComprasController extends AppController {

	public function initialize() {
		parent::initialize();

		$this->loadModel('Compras');
		$this->loadModel('Clientes');
		$this->loadModel('Vendedores');
	}

	public function beforeFilter(Event $event) {
		parent::beforeFilter($event);
		$this->Auth->allow('index');

	}


	public function index() {
		$query = $this->Compras->find('all')->contain(['Clientes', 'Vendedores']);
		//$query = $query->toArray();

		$this->set('compras', $query);
	}

	public function add() {

		if ($this->request->is('post')) {

			$compra = $this->Compras->newEntity($this->request->data);
			$compra->created = new DateTime('now');
			if ($this->Compras->save($compra)) {
				$this->Flash->success('Compra cadastrada com sucesso!');
				$this->redirect(['action' => 'index']);
			}
		}

		$clientes = $this->Clientes->find('list', [
			'keyField' => 'id',
			'valueField' => 'nome'
		]);

		$vendedores = $this->Vendedores->find('list', [
			'keyField' => 'id',
			'valueField' => 'nome'
		]);

		$this->set(compact('clientes', 'vendedores'));
	}
}
