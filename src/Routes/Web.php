<?php

namespace App\src\Routes;

use Itomori\Core\Router;
use Itomori\Core\Session;
use App\src\Http\Controllers\MainController;

class Web
{
    public function __construct(Router $router)
    {
        $this->session = new Session();

        $this->mainController = new MainController();

        $router->get('/', function () {
            $this->mainController->index();
        });

        $router->run();
    }
}
