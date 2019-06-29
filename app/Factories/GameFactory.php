<?php

namespace App\Factories;

class GameFactory extends AbstractFactory {

	/**
	 * @param string $fqcn
	 * @param array $data
	 * @param array $processors
	 */
	public function create($fqcn, $data = [], $processors = []) {
		$game = app($fqcn);

		if(empty($data) === false) {
			$game->fill($data);
		}

		return $game;
	}
}