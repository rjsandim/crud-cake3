<?php

namespace App\Model\Table;

use Cake\ORM\Table;

// https://github.com/davidyell/CakePHP3-Proffer/blob/master/docs/examples.md


class ComprasTable extends Table {

	public function initialize(array $config) {
		parent::initialize($config);

		$this->belongsTo('Clientes');
		$this->belongsTo('Vendedores');

		$this->addBehavior('Proffer.Proffer', [
			'imagem' => [
				'root' => WWW_ROOT . 'files',
				'dir' => 'imagem_dir',
			]
		]);

	}

}
