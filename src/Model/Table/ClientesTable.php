<?php

use Cake\ORM\Query;
use Cake\ORM\Table;

class ClientesTable extends Table {


	public function findListaParaSelect(Query $query, array $options) {
		return $query->find('list', [
			'keyField' => 'id',
			'valueField' => 'nome'
		]);
	}

}