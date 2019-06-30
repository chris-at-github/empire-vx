<?php

namespace App\Factories\Processors;

class PropertiesProcessor extends FactoryProcessor {

	/**
	 * @param object $object
	 * @param array $data
	 * @param array $configuration
	 * @return object
	 */
	public function process($object, $data, $configuration = []) {
		$object->fill($data);

		return $object;
	}
}