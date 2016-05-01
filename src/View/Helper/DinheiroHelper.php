<?php

namespace App\View\Helper;

use Cake\View\Helper;

class DinheiroHelper extends Helper
{
	public function formata($preco) {
		$preco = ($preco / 100).'.'. ($preco % 100); // converte inteiro para uma string float
		$preco = floatval($preco); // converte string float para float de fato
		return 'R$ '.number_format($preco, 2, ',', '.'); //converte float para string formato dinheiro
	}
}