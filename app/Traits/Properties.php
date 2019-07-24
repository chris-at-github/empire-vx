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

	/**
	 * @return array
	 */
	public function toArray() {
		$properties = [];

		foreach(get_object_vars($this) as $key => $value) {
			$method = 'get' . Str::studly($key);

			if(method_exists($this, $method) === true) {
				$properties[$key] = $this->{$method}($value);
			}
		}

		return $properties;
	}
}