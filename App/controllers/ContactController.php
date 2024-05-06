<?php

namespace App\controllers;

class ContactController
{
    public function index()
    {
        $title = 'Contact';
        return view('contact', compact('title'));
    }

}