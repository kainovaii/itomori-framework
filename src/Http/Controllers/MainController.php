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
