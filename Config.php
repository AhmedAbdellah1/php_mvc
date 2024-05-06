<?php

//db config
define('DRIVER', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'phpMvcWorkshop');
define('DB_USER', 'root');
define('DB_PASS', '');

return [
    'database' => [
        'driver' => DRIVER,
        'host' => DB_HOST,
        'user' => DB_USER,
        'pass' => DB_PASS,
        'dbname' => DB_NAME,
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ],
    ],
];