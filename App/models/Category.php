<?php

namespace App\Models;


class Category
{
    private $db;

    public function __construct()
    {
        $this->db = \Db::connection();
    }

    public function all()
    {
        $query = "SELECT id, name FROM categories";
        $result = $this->db->prepare($query);
        $result->execute();
        return $result->fetchAll(\PDO::FETCH_ASSOC);
    }

}