<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

    $router->get('', 'IndexController@index');
    $router->get('orders', 'OrderController@index');
    $router->get('orders/create', 'OrderController@create');
    $router->post('orders/store', 'OrderController@store');
    $router->get('add', 'AddController@index');
    $router->post('add/category', 'AddController@addCategory');
    $router->post('add/product', 'AddController@addProduct');

//    $router->get('about', 'IndexController@about');
//    $router->get('about/culture', 'IndexController@aboutCulture');
//    $router->get('contact', 'IndexController@contact');
//    $router->post('contact-send', 'IndexController@contactForm');
//    $router->get('register', 'RegisterController@index');

function vardump($var) {
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}
