<?php

namespace core;
class Router
{
    public $routes = [
        'get' => [],
        'post' => []
    ];
    public static function load($file)
    {
        $router = new static();
        require $file;
        return $router;
    }
    public function get($uri, $controller)
    {
        $this->routes['get'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['post'][$uri] = $controller;
    }

    // Direct the incoming request to the appropriate controller method
    public function direct($url, $methodType)
    {
        try {
            // Check if the requested URL exists in defined routes
            if (array_key_exists($url, $this->routes[$methodType])) {
                // Call the appropriate controller method
                return $this->callAction(...explode('@', $this->routes[$methodType][$url]));
            }
            throw new \Exception('No route defined for this URL.');
        } catch (\Exception $e) {
            echo 'Error: ' . @$e->getMessage();
        }
    }

    // Call the controller action method
    public function callAction($controller, $action)
    {
        try {
            // Construct the controller class name
            $controller = "App\\controllers\\" . $controller;
            // Instantiate the controller object
            $controller = new $controller;

            // Check if the action method exists in the controller
            if (!method_exists($controller, $action)) {
                // Throw an exception if the action method doesn't exist
                throw new \Exception("{$controller} does not respond to the {$action} action.");
            }

            // Call the action method of the controller
            return $controller->$action();
        } catch (\Exception $e) {
            echo 'Error: ' . @$e->getMessage();
        }
    }
}