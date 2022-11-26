<?php

namespace App\src\Http\Controllers;

use Obsidian\Controllers\Controller;

class MainController extends Controller
{
    public static function index()
    {
        self::view('index');
    }
}
