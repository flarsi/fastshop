<?php
/**
 * Created by PhpStorm.
 * User: Professional
 * Date: 09.11.2019
 * Time: 12:57
 */

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
       $query = "SELECT
          orders.id as order_id,
          orders.created_at as order_created_at,
          products.name as product_name,
          sum(products.weight) as weight,
          sum(products.price) as price
          FROM orders 
          LEFT JOIN order_product on orders.id = order_product.order_id
          LEFT JOIN products on order_product.product_id = products.id
          GROUP BY orders.id, orders.created_at, products.name, products.weight, products.price  
          ";

        $result = $this->db->prepare($query);
        $result->execute();
        return $result->fetchAll(\PDO::FETCH_GROUP|\PDO::FETCH_ASSOC);
    }
}