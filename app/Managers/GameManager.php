<?php

namespace App\Managers;

use Illuminate\Support\Facades\DB;

class GameManager {

	/**
	 * @param string $id
	 */
	public function get($id) {
		$game = DB::table('games')->where('id', $id)->first();
		dd($game);
	}
}