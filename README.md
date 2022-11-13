<p align="center">
    <br />
    <img src="https://i.imgur.com/InSzvR4.png" width="20%">
    <br />
</p>
<p align="center">
    <img src="https://img.shields.io/badge/Version-1.0.1-green.svg" />
    <img style="margin-left: 10px;" src="https://img.shields.io/badge/License-MIT-green.svg" />
</p>

## Installing
```
composer create-project itomori/itomori
```

## Todos
- [ ] Middleware
- [ ] Authentication
- [X] Migration

## Routing
### Available Methods
```php
Route::get($uri, $callback);
Route::post($uri, $callback);
Route::put($uri, $callback);
Route::delete($uri, $callback);
Route::options($uri, $callback);
Route::patch($uri, $callback);
```

### Basic Routing
```php
Router::get('/', function () {
    MainController::index();
});
```
### Route Parameters
```php
Router::get('/user/{id}', function ($id) {
    MainController::index($id);
});
```

## Controllers
### Basic controllers
```php
<?php

namespace App\src\Http\Controllers;

use Obsidian\Core\Controller;

class MainController extends Controller
{
    public static function index()
    {
        self::view('index');
    }
}
```

### Single Action Controllers

```php
<?php

namespace App\src\Http\Controllers;

use Obsidian\Core\Controller;

class MainController extends Controller
{
    public function __invoke()
    {
        self::view('index');
    }
}

```

## Models
### Basic models
```php
<?php

namespace App\src\Models;

use Obsidian\Core\Model;

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

## Migration
### Example migration
```php
<?php

namespace App\src\Migrations;

use Obsidian\Database\InputType;
use Obsidian\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{
    public static function run()
    {
        self::table('article');

        self::create([
            InputType::increments('id'),
            InputType::string('title'),
            InputType::text('content'),
            InputType::int('author'),
        ]);
    }
}

```

## CLI
### Create migration file
```
php itomori orm -make:migration migration_file
```
### Start migration
```
php itomori orm -start:migrate migration_file
```