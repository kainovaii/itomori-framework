<?php

use Obsidian\Core\Main;
use Obsidian\Autoloader;

require_once '../vendor/itomori/obsidian/src/core/Main.php';
require_once '../vendor/itomori/obsidian/src/Autoloader.php';

define('ROOT', dirname(__DIR__));

Autoloader::register();

$app = new Main(ROOT);

$app->start();
