<?php

/**
 * Dautput
 * From data to output.
 * @author 		Tim van Bergenhenegouwen, Zomnium.
 * @link 		http://zomnium.com
 * @copyright 	2014 Zomnium, Tim van Bergenhenegouwen
 */

namespace Zomnium\Dautput;

class DataXml implements Data
{
	private $data;

	public function __construct($data)
	{
		$this->set($data);
	}

	public function set($data)
	{
		$this->data = $data;
	}

	public function get()
	{
		return $this->data;
	}
}
