<?php

require_once "vendor/autoload.php";
require_once "core/bootstrap.php";

use core\Request;
use core\Router;

Router::load("App/routes/routes.php")->direct(Request::url(), Request::method());
