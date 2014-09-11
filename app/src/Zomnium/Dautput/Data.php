<?php

/**
 * Dautput
 * From data to output.
 * @author 		Tim van Bergenhenegouwen, Zomnium.
 * @link 		http://zomnium.com
 * @copyright 	2014 Zomnium, Tim van Bergenhenegouwen
 */

namespace Zomnium\Dautput;

interface Data
{
	private $data;

	public function __construct($data);

	public function set($data);

	public function get();
}
