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
