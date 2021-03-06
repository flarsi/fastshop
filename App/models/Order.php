<?php

namespace App\Models;


class Order
{
    private $db;

    public function __construct()
    {
        $this->db = \Db::connection();
    }

    public function all()
    {
        $user = [
          "name"=> $_COOKIE["name"],
          "password"=> $_COOKIE["password"]
        ];

        var_dump($user);

        $selectUser = "SELECT id FROM `users` WHERE name = :name and password = :password";
        $result = $this->db->prepare($selectUser);
        $result->execute($user);
        $userId = $result->fetch()['id'];

       $query = "SELECT
          orders.id,
          order_product.order_id as order_id,
          orders.created_at as order_created_at,
          products.name as product_name,
          sum(order_product.weight) as weight,
          sum(order_product.price) as price
          FROM orders
          LEFT JOIN order_product on orders.id = order_product.order_id
          LEFT JOIN products on order_product.product_id = products.id
          WHERE orders.user_id = ". $userId ."
          GROUP BY orders.id, orders.created_at, products.name, products.weight, products.price  
          ";

        $result = $this->db->prepare($query);
        $result->execute();
        return $result->fetchAll(\PDO::FETCH_GROUP|\PDO::FETCH_ASSOC);
    }

    public function save($data)
    {


        $userId = ['userId' => $data['userId']];
        $orderquery = "INSERT INTO orders(user_id) VALUES (:userId)";
        $result = $this->db->prepare($orderquery);
        $result->execute($userId);

        $lastorder = "SELECT * FROM orders ORDER BY id DESC limit 1";
        $resultLastOrder = $this->db->prepare($lastorder);
        $resultLastOrder->execute();
        $orderId = ['id' => $resultLastOrder->fetch()['id']];

        foreach ($data['order'] as $order){

            $orderProduct = "INSERT INTO order_product (order_id, product_id, price, weight)
                             VALUES (" . $orderId['id'] . ", :id, :price, :weight)";
            $resultOrder = $this->db->prepare($orderProduct);
            $resultOrder->execute($order);
        }

        return $result->fetch();

    }

}