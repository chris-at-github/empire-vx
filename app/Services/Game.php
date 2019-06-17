<?php

namespace App\Services;

class Game {

	/**
	 * @return array
	 */
	public function toArray() {
		return [];
	}

	/**
	 * @return string
	 */
	public function toJson() {
		return json_encode($this->toArray());
	}
}