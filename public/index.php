<?php

use Itomori\Autoloader;
use Itomori\Core\Main;

require_once '../vendor/kainovaii/itomori/src/core/Main.php';
require_once '../vendor/kainovaii/itomori/src/Autoloader.php';

define('ROOT', dirname(__DIR__));

Autoloader::register();

$app = new Main(ROOT);

$app->start();
