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
use App\Models\Category;

class OrderController
{
    public function index()
    {
        $order = new Order();
        $orders = array_reverse($order->all(), true);
        return view('orders', ['orders' => $orders]);
    }

    public function create()
    {
        $title = 'Create Order';
        $product = new Product();
        $products = $product->all([]);

        $category = new Category();
        $categories = $category->all();

        return view('order-create', compact('title','categories', 'products'));
    }

    public function store()
    {
        $post = $_POST;
        if(!empty($post)) {
            $order = new  Order();
            $sucsess = $order->save($post);
            return $sucsess;
        }
    }
}