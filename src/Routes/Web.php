<?php

use Obsidian\Routing\Router;
use App\src\Http\Controllers\MainController;

/*
|------------------------------------------------
| Web Routes
|------------------------------------------------
*/

Router::get('/', function () {
    MainController::index();
});
