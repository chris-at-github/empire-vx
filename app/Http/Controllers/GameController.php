<?php

namespace App\Http\Controllers;

class GameController extends Controller {

	public function dashboard() {
		return view('game/dashboard', ['data' => json_encode([
			'games' => app(\App\Managers\GameManager::class)->find()->toArray()
		])]);
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
