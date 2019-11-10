<?php

namespace App\Core;

use App\Controllers\PageController;

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