<?php

namespace App\Models;

abstract class AbstractModel {

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