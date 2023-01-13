<?php

namespace App\core;

/**
 * Description of Router
 *
 * @author leonid
 */
class Router 
{
    protected $routes = [];
    protected $params = [];
    
    public function __construct() 
    {
        $arr = require __DIR__ .'/../config/routes.php';
        foreach ($arr as $key => $value) {
            $this->add($key, $value);
        }
        //var_dump($arr);
        //var_dump($this->routes);
    }
    
    public function add($route, $params) 
    {
        //echo '<p>'.$route.'</p>';
       // echo '<br>';
       // var_dump($params);
        $route = '#^' . $route . '$#';
        $this->routes[$route] = $params;
    }
    
    public function match() 
    {
        //var_dump($_SERVER);
        $url = trim($_SERVER['REQUEST_URI'], '/');
        //var_dump($url);
        foreach ($this->routes as $route => $params) {
            if (preg_match($route, $url, $matches)) {
                var_dump($params);
                //var_dump($matches);
            }
        }
    }
    
    public function run() 
    {
        $this->match();
        //echo 'start';
    }
}
