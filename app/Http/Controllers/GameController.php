<?php

namespace App\Http\Controllers;

class GameController extends Controller {

	public function dashboard() {
		$game = app(\App\Managers\GameManager::class)->get('3b148c5a-8c65-4387-8cf5-014d973b039c');

		return view('game/dashboard');
	}

	public function listing() {
		return view('game/listing', [
			'games' => app(\App\Managers\GameManager::class)->find()->toArray()
		]);
	}

	public function index($id = null) {
		//app(\App\Managers\GameManager::class)->get('e329b8fd-cdb9-45f1-b0b1-57a7d142e1f1');
	}
}
