<?php

use Obsidian\Core\Router;
use App\src\Http\Controllers\MainController;

/*
|------------------------------------------------
| Web Routes
|------------------------------------------------
*/

Router::get('/', function () {
    MainController::index();
});
