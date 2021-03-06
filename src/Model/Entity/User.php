<?php

namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

class User extends Entity {

	protected $_accessible = ['*' => true];
	
	protected function _setSenha($value) {
		$hasher = new DefaultPasswordHasher();

		return $hasher->hash($value);
	}
}
