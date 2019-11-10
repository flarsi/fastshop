<?php

namespace App\Core;

class Router
{
    public $routes = [
        'GET' => [],
        'POST' => [],
    ];


    public static function load($file)
    {
        $router = new self;

        require $file;
        return $router;
    }

    public function get($uri, $controller)
    {

        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public function direct($uri, $requestMethod)
    {
        if(array_key_exists($uri, $this->routes[$requestMethod])){
//            die($this->routes[$requestMethod][$uri]);



            return $this->callAction(
                ...explode('@',$this->routes[$requestMethod][$uri])
            );
        }
        throw new Exception('No route defined');
    }

    public function callAction($controller, $action)
    {
        $controller = "App\\Controllers\\{$controller}";
        if (!method_exists($controller, $action)){
            throw new \Exception("{$controller} does not have to the {$action} method.");
        }

        $controller = new $controller;



        return $controller->$action();

    }
}