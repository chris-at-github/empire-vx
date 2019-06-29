<?php

namespace App\Models;

use App\Traits\Properties;

class GameModel extends AbstractModel {
	use Properties;

	/**
	 * @var string
	 */
	protected $name;

	/**
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @param string $name
	 */
	public function setName(string $name) {
		$this->name = $name;
	}
}