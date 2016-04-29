<?php
namespace App\Controller;

use Cake\Event\Event;

class UsersController extends AppController {

	public function beforeFilter(Event $event) {
		parent::beforeFilter($event);
		$this->Auth->allow('add');
	}

	public function login() {
		
		if ($this->request->is('post')) {

			$user = $this->Auth->identify();
			if ($user) {
				$this->Auth->setUser($user);

				return $this->redirect($this->Auth->redirectUrl());
			}
			$this->Flash->error('Your username or password is incorrect.');
		}
	}

	public function add() {

		if ($this->request->is('post')) {

			$user = $this->Users->newEntity($this->request->data);

			if ($this->Users->save($user)) {
				$this->Flash->success("Deu Certo!");
				return $this->redirect(['action' => 'login']);
			}

			$this->Flash->error("Deu Ruim!");

		}

	}

	public function logout() {
		return $this->redirect($this->Auth->logout());
	}

}
