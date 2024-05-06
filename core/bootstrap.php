<?php

use core\App;
use core\database\ConnectionDatabase;
use core\database\QueryBuilder;

App::bind( 'config' , require 'config.php' );
App::bind( 'database' , new QueryBuilder( ConnectionDatabase::makeConnect ( App::get( 'config' )[ 'database' ] ) ) );


//$app['database']->find('articles',1);
//$app['database']->select('articles','title')
//$app['database']->selectAll('articles');
//$app['database']->update( 'articles' , 'title = ?' , 'id = ?' , [  'title88' ,  1 ] );
//$app['database']->delete( 'articles' , 2 );

function view ( $fileView , $data )
{
    extract ( $data );
    return require "App/views/$fileView.php";
}
