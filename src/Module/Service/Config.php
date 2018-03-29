<?php

namespace App\Module\Service;

class Config
{
	private $cloudstack;

	public function __construct($cloudstack)
	{
		$this->cloudstack = $cloudstack;
	}

	public function dump()
	{
		return $this->cloudstack;
	}
}