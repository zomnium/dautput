<?php

/**
 * Dautput
 * From data to output.
 * @author 		Tim van Bergenhenegouwen, Zomnium.
 * @link 		http://zomnium.com
 * @copyright 	2014 Zomnium, Tim van Bergenhenegouwen
 */

use Zomnium\Dautput\App;
use Symfony\Component\Console\Application;

// Composer autoloader
require_once __DIR__.'/vendor/autoload.php';

// Application bootstrap
$app = new Application();
$app->add(new App);
$app->run();
