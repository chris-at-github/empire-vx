<?php

namespace App\Http\Controllers;

class GameController extends Controller {

	public function listing() {

		app(\App\Managers\GameManager::class)->get('e329b8fd-cdb9-45f1-b0b1-57a7d142e1f1');
//		return view('game/listing', [
//			'games' => [
//				'e329b8fd-cdb9-45f1-b0b1-57a7d142e1f1' => [
//					'id' => 'e329b8fd-cdb9-45f1-b0b1-57a7d142e1f1',
//					'name' => 'Game [2019-06-17 23:15:00]'
//				],
//				'b035ebbe-0bc0-487b-9416-4f5deaf0cda4' => [
//					'id' => 'b035ebbe-0bc0-487b-9416-4f5deaf0cda4',
//					'name' => 'Game [2018-08-03 08:05:00]'
//				],
//			]
//		]);
		return view('game/listing');
	}

	public function index($id = null) {
		dd($id);
	}
}
