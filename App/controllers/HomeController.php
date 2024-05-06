<?php

namespace App\controllers;

class HomeController
{
    public function index()
    {
        $title = 'Home';
        return view('home', compact('title'));
    }
}