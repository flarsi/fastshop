<?php


namespace App\Controllers;


use App\Models\User;

class UserController
{
    public function register()
    {
        $post = $_POST;
        $user = new User();
        return $user->new($post);
    }

    public function logIn()
    {
        $post = $_POST;
        $user = new User();
        echo $post['password'] == $user->old($post)['password'];
    }
}