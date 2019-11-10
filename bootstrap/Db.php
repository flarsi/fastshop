<?php

class Db
{
    public static function connection()
    {
        try {
            $pdo = new PDO(
                'mysql:host=localhost;dbname=fastshop',
                'user',
                '123456'
            );
            return $pdo;
        } catch (Exception $e){
            echo $e->getMessage();
        }
    }
}