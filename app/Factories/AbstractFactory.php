<?php

namespace App\Factories;

abstract class AbstractFactory {

	/**
	 * @var array
	 */
	protected $processors = [];

	/**
	 * @param object $object
	 * @param array $data
	 * @param array $processors
	 * @return object
	 */
	protected function handleProcessors($object, $data, $processors) {
		if(empty($processors) === true) {
			$processors = $this->processors;
		}

		foreach($processors as $processor) {
			$object = app($processor)->process($object, $data, []);
		}

		return $object;
	}
}