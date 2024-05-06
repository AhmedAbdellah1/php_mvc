<?php

namespace App\controllers;

use core\App;

class ArticlesController
{
    public function index ()
    {
        $title = 'Articles';
        $data = App ::get ( 'database' ) -> selectAll ( 'articles' );
        return view ( "articles" , compact ( 'data' , 'title' ) );
    }

    public function show ()
    {
        $title = 'Article';
        $data =App::get ('database')->find('articles',$_GET['id']);
        return view ( "article" , compact ( 'data' , 'title' ) );
    }

    public function create ()
    {
        $title = 'Create Articles';
        return view ( "create_article" , compact ( 'title' ) );
    }

    public function store ()
    {
        $data = [ 'title' => $_POST[ 'title' ] , 'body' => $_POST[ 'body' ] ];
        App ::get ( 'database' ) -> insert ( 'articles' , $data );
        header ( "Location: /articles" );
    }

    public function edit ()
    {
        $title = 'Edit Articles';
        $data =App::get ('database')->find('articles',$_GET['id']);
        return view ( "edit_article" , compact ( 'title' , 'data' ) );

    }
    public function update ()
    {
        $data = [$_POST[ 'title' ] ,$_POST[ 'body' ], $_POST['id'] ];
        App ::get ( 'database' ) -> update ( 'articles' , "title = ? , body = ?", 'id = ?' , $data );
        header ( "Location: /articles" );
    }

    public function delete ()
    {
        App ::get ( 'database' ) -> delete ( 'articles' , $_GET[ 'id' ] );
        header ( "Location: /articles" );
    }

}