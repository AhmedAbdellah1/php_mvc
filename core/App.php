<?php

namespace core;

class App
{
    protected static $registered =[];

    public static function bind ( $key , $value )
    {
            self::$registered[ $key ] = $value;
    }
    public static function get ( $key )
    {
        if (!array_key_exists ( $key , self::$registered ) ) {
            throw new \Exception ( "No {$key} has been registered." );
        }
        return self::$registered[ $key ];
    }
}