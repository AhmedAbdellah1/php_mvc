<?php

namespace core;
class Request
{
    // get request url
    public static function url (): string
    {
        return trim(parse_url($_SERVER['REQUEST_URI'] , PHP_URL_PATH) , '/');
    }

    // get request method
    public static function method (): string
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

}