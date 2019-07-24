<?php

namespace App\Models;

use Illuminate\Contracts\Support\Arrayable;

abstract class AbstractModel implements Arrayable {

	/**
	 * @var string
	 */
	protected $id;

	/**
	 * @return string
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @param string $id
	 */
	public function setId(string $id) {
		$this->id = $id;
	}
}