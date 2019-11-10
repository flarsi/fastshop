<?php

namespace App\Controllers;

class PageController
{
    public function index()
    {
        $user =
        ['name'=>'Dima',
        'age' =>35];
        return view('index', $user);
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function aboutCulture()
    {
        return view('contact-culture');
    }

    public function contactForm()
    {
        var_dump($_POST);
    }


}