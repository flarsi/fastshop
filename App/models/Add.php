<?php

namespace App\Models;


class Add
{
    private $db;

    public function __construct()
    {
        $this->db = \Db::connection();
    }

    public function category($data)
    {
        $query = "INSERT INTO categories (name, description) VALUES (:name, :desc)";
        $result = $this->db->prepare($query);
        $result->execute($data);

        return $result;
    }

    public function product($data)
    {
        $query = 'INSERT INTO products (`name`, `price`, `weight`, `code`, `category_id`, `product_status_id`, `desc`) 
        VALUES (:name, :price, :weight, :code, :category_id, :status_id, :desc)';

        $result = $this->db->prepare($query);
        $result->execute($data);
        return $result;
    }

    public function all()
    {
        $query = 'SELECT id, name FROM categories';
        $categoryes = $this->db->prepare($query);
        $categoryes->execute();

        $query = 'SELECT id , name FROM product_statuses';
        $statuses = $this->db->prepare($query);
        $statuses->execute();

        $result = [
            'categoryes' => $categoryes->fetchAll(),
            'statuses' => $statuses->fetchAll()
    ];

        return $result;
    }

}