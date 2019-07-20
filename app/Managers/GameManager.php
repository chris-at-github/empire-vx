<?php

namespace App\Managers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use App\Factories\GameFactory;

class GameManager {

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
			$games->put($value->id, app(GameFactory::class)->create($value->namespace, json_decode($value->properties)));
		}

		return $games;
	}

	/**
	 * @param string $id
	 */
	public function get($id) {
		$data = DB::table('games')->where('id', $id)->first();

		if(empty($data) === false) {
			$game = app(GameFactory::class)->create($data->namespace, json_decode($data->properties));
			dd($game);
		}
	}
}