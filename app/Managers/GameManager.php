<?php

namespace App\Managers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use App\Factories\GameFactory;

class GameManager {

	/**
	 * @param object $data
	 * @return array
	 */
	protected function mergeProperties($data) {
		$properties = [
			'id' => $data->id
		];
		$properties = array_merge($properties, json_decode($data->properties, true));

		return $properties;
	}

	/**
	 * @param array $options
	 * @param array $sorting
	 * @param array $processors
	 * @return \Illuminate\Support\Collection
	 */
	public function find($options = [], $sorting = [], $processors = []) {

		/** \Illuminate\Support\Collection $games */
		$games = app(Collection::class);
		$data = DB::table('games')->get();

		foreach ($data as $value) {
			$games->put($value->id, app(GameFactory::class)->create($value->namespace, $this->mergeProperties($value)));
		}

		return $games;
	}

	/**
	 * @param string $id
	 * @return \App\Models\GameModel|null
	 */
	public function get($id) {
		$game = null;
		$data = DB::table('games')->where('id', $id)->first();

		if(empty($data) === false) {
			$game = app(GameFactory::class)->create($data->namespace, $this->mergeProperties($data));
		}

		return $game;
	}
}