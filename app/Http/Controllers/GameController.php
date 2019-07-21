<?php

namespace App\Http\Controllers;

class GameController extends Controller {

	public function listing() {
		return view('game/listing', [
			'games' => app(\App\Managers\GameManager::class)->find()
		]);
	}

	public function index($id = null) {
		//app(\App\Managers\GameManager::class)->get('e329b8fd-cdb9-45f1-b0b1-57a7d142e1f1');
	}
}
