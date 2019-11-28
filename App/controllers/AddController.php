<?php
/**
 * Created by PhpStorm.
 * User: Professional
 * Date: 24.11.2019
 * Time: 15:45
 */

namespace App\Controllers;

use App\Models\Add;

class AddController
{
    public function index()
    {
        $add = new Add();

        $all = $add->all();

        return view('Add', ['all' => $all]);
    }

    public function addCategory()
    {
        $post = $_POST;

        $add = new Add();
        $add->category($post);

        return $add;
    }

    public function addProduct()
    {
        $post = $_POST;

        $add = new Add();
        $sucsess = $add->product($post);

        return $sucsess;
    }

}