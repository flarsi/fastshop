<?php
/**
 * Created by PhpStorm.
 * User: Professional
 * Date: 09.11.2019
 * Time: 12:55
 */

namespace App\Controllers;

use App\Models\Order;
use App\Models\Product;

class OrderController
{
    public function index()
    {
        $order = new Order();
        $orders = $order->all();
//        var_dump($orders);
        return view('orders', ['orders' => $orders]);
    }

    public function create()
    {
        $product = new Product();
        $products = $product->all([]);
        var_dump($products);
        return view('order-create');
    }

    public function store()
    {
        var_dump($_POST);
    }
}