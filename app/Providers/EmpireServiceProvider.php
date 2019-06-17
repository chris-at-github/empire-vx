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
		$this->app->singleton(\App\Services\Empire::class, function($app) {
			$empire = new \App\Services\Empire();
			$empire->setVersion(config('empire.version'));
			$empire->setName(config('empire.name'));

			return $empire;
		});
	}
}
