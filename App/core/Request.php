<?php

namespace App\Core;

use App\Controllers\IndexController;

class Request
{
    public static function uri()
    {
        return trim($_SERVER['REQUEST_URI'], '/');
    }

    public static function method()
    {
        return trim($_SERVER['REQUEST_METHOD']);
    }
}