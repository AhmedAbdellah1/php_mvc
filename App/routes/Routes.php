<?php

namespace App\Routes;
$router->get("", "HomeController@index");
$router->get("about", "AboutController@index");
$router->get("contact", "ContactController@index");
$router->get("articles", "ArticlesController@index");
$router->get("create_article", "ArticlesController@create");
$router->post("articles/store", "ArticlesController@store");
$router->get("edit_article", "ArticlesController@edit");
$router->post("article/update", "ArticlesController@update");
$router->get("delete_article", "ArticlesController@delete");
$router->get("article", "ArticlesController@show");

