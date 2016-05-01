<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class CarrinhosTable extends Table {

	public function initialize(array $config) {
		parent::initialize($config);

		$this->hasMany('Itens');
		$this->addBehavior('Timestamp');
	}

}