<?php
/**
 * Created by PhpStorm.
 * User: Professional
 * Date: 09.11.2019
 * Time: 15:51
 */

namespace App\Models;


class Product
{
    private $db;

    public function __construct()
    {
        $this->db = \Db::connection();
    }

    public function all($productStatus)
    {
        if (!is_array($productStatus)) return;

        $arr = implode(',', array_fill(0, count($productStatus), '?'));
        $query = "SELECT 
          categories.id as category_id, 
          categories.name as category_name,
          products.id as product_id, 
          products.weight, 
          products.price, 
          products.code, 
          products.desc, 
          product_statuses.name as product_status_name, 
          product_statuses.id as product_status_id 
          FROM categories 
          LEFT JOIN products ON products.catigore_id = categories.id 
          LEFT JOIN product_statuses ON products.product_status_id = product_statuses.id ";
        if (!empty($productStatus)) {
            $query .= "WHERE products.product_status_id IN (" . $arr . ")";
        }
        $query .= "GROUP BY categories.id, products.id ";

        $result = $this->db->prepare($query);
        $result->execute($productStatus);
        return $result->fetchAll(\PDO::FETCH_GROUP|\PDO::FETCH_ASSOC);
    }
}