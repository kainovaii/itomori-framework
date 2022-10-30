<p align="center">
    <br />
    <img src="https://i.imgur.com/lJlVzCQ.png" width="20%">
    <br />
</p>
<p align="center">
    <img src="https://img.shields.io/badge/Version-1.0.1-green.svg" />
    <img style="margin-left: 10px;" src="https://img.shields.io/badge/License-MIT-green.svg" />
</p>

## Routing

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

## Models
### Basic models
```php
<?php

namespace App\src\Models;

use Itomori\Core\Model;

class SampleModel extends Model
{
    protected $id;

    public function __construct()
    {
        $this->table = 'table_name';
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
```

### Call models 
```php
$articleModel = new ArticleModel();
$articleModel->findAll();
```

## CLI
### Create controller
```
php itomori make -c controller_name
```
### Create model
```
php itomori make -m model_namme
```
