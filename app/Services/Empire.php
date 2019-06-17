<?php

namespace App\Services;

class Empire {

	/**
	 * @var string
	 */
	protected $version = '';

	/**
	 * @var string
	 */
	protected $name = '';

	/**
	 * @return string
	 */
	public function getVersion(): string {
		return $this->version;
	}

	/**
	 * @param string $version
	 */
	public function setVersion(string $version): void {
		$this->version = $version;
	}

	/**
	 * @return string
	 */
	public function getName(): string {
		return $this->name;
	}

	/**
	 * @param string $name
	 */
	public function setName(string $name): void {
		$this->name = $name;
	}
}