<?php

namespace App\Managers;

use Illuminate\Support\Facades\DB;
use App\Factories\GameFactory;

class GameManager {

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