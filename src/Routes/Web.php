<?php

use Obsidian\Routing\Router;
use App\src\Http\Controllers\MainController;
use App\src\Http\Controllers\TestController;

/*
|------------------------------------------------
| Web Routes
|------------------------------------------------
*/

Router::get('/', function () {
    MainController::index();
});

Router::get('/test', function () {
    TestController::index();
});
