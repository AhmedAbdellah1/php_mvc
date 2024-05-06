<?php
namespace core\database;
use PDO;
use PDOException;
class ConnectionDatabase
{
    public static function makeConnect($config)
    {
        try {
            // $dsn = 'mysql:host=localhost;dbname=phpMvcWorkshop';
            return new PDO($config['driver'] . ':host=' . $config['host'] . ';dbname=' . $config['dbname'], $config['user'], $config['pass'], $config['options']);
        }catch (PDOException $e) {
            die('Connection failed: ' . $e->getMessage());
        }
    }
}