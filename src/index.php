<?php

// Autoload files using the Composer autoloader.
require_once __DIR__ . '/../vendor/autoload.php';

use App\HomeController;
$homeController = new HomeController;

echo $homeController->factorial(5);