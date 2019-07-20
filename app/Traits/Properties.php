<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait Properties {

	/**
	 * @param array $properties
	 * @return void
	 */
	public function fill($properties) {
		foreach($properties as $key => $value) {
			$method = 'set' . Str::studly($key);

			if(method_exists($this, $method) === true) {
				$this->{$method}($value);
			}
		}
	}
}