<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

    $router->get('', 'IndexController@index');
    $router->get('orders', 'OrderController@index');
    $router->get('orders/create', 'OrderController@create');
    $router->get('about', 'IndexController@about');
    $router->get('about/culture', 'IndexController@aboutCulture');
    $router->get('contact', 'IndexController@contact');
    $router->post('contact-send', 'IndexController@contactForm');
    $router->get('register', 'RegisterController@index');


