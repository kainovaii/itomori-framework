<center>
    <img src="https://i.imgur.com/lJlVzCQ.png">
</center>

## Routing
#
### Basic Routing
```php
$router->get('/', function () {
    $this->mainController->index();
});
```
### Route Parameters
```php
$router->get('/user/{id}', function ($id) {
    $this->mainController->index($id);
});
```

## Controllers
#
### Basic controllers
```php
<?php

namespace App\src\Http\Controllers;

use Itomori\Core\Controller;

class MainController extends Controller
{
    public function index()
    {
        $this->render('index');
    }
}
```

### Single Action Controllers

```php
<?php

namespace App\src\Http\Controllers;

use Itomori\Core\Controller;

class MainController extends Controller
{
    public function __invoke()
    {
        $this->render('index');
    }
}
```