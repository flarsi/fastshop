<?php

class Db
{
    public static function connection()
    {
        try {
            $pdo = new PDO(
                'mysql:host=localhost;dbname=fastshop',
                'root',
                '328409root'
            );
            return $pdo;
        } catch (Exception $e){
            echo $e->getMessage();
        }
    }
}