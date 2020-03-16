<?php


namespace App\Models;


class User
{
    private $db;

    public function __construct()
    {
        $this->db = \Db::connection();
    }

    public function new($user)
    {
        $create = "INSERT INTO `users` (`name`, `email`, `password`, `role_id`) 
                VALUES ( :name, :email, :password, '2')";

        $result = $this->db->prepare($create);
        var_dump($user);
        $result->execute($user);

        return $result->fetch();
    }

    public function old($user)
    {
        $logIn = "SELECT * FROM `users` WHERE name = :name and password = :password ";
        $result = $this->db->prepare($logIn);
        $result->execute($user);

        return $result->fetch();
    }

}