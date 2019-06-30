<?php

namespace App\Factories;

use App\Factories\Processors\PropertiesProcessor;

class GameFactory extends AbstractFactory {

	/**
	 * @var array
	 */
	protected $processors = [
		PropertiesProcessor::class
	];

	/**
	 * @param string $fqcn
	 * @param array $data
	 * @param array $processors
	 * @return \App\Models\GameModel
	 */
	public function create($fqcn, $data = [], $processors = []) {
		$game = app($fqcn);

		if(empty($data) === false) {
			$this->handleProcessors($game, $data, $processors);
		}

		return $game;
	}
}