<?php

namespace App\Factories\Processors;

abstract class FactoryProcessor {

	/**
	 * @param object $object
	 * @param array $data
	 * @param array $configuration
	 * @return object
	 */
	abstract function process($object, $data, $configuration = []);
}