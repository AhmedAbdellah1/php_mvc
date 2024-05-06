<?php

namespace App\controllers;
class AboutController
{
    public function index ()
    {
        $title = 'About';
        return view('about', compact('title'));
    }
}