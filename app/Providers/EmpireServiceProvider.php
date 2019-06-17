<?php

namespace App\Providers;

use Laravel\Lumen\Providers\EventServiceProvider as ServiceProvider;

class EmpireServiceProvider extends ServiceProvider {

	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register() {

		// \App\Services\Empire
		$this->app->singleton(\App\Services\Empire::class, function($app) {
			$empire = new \App\Services\Empire();
			$empire->setVersion(config('empire.version'));
			$empire->setName(config('empire.name'));

			return $empire;
		});

		// \App\Services\Game
		$this->app->singleton(\App\Services\Game::class, function($app) {
			$game = new \App\Services\Game();

			return $game;
		});
	}
}
