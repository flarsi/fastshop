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
        $orders = $order->all();
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
        $userid = $_POST["userId"];
        $productsIds = $_POST["productsIds"];
        $prices = $_POST["prices"];
        $weights = $_POST["weights"];

        $order = new  Order();
        $sucsess = $order->save($userid, $productsIds, $prices, $weights);
//        $post['name'] = array_filter($_POST, function ($item) {
//            if (!empty($item['name'])) return $item;
//        });
        echo '<pre>';
        var_dump($_POST);
        echo '</pre>';
        return $sucsess;
    }
}