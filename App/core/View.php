<?php

namespace App\core;

/**
 * Description of View
 *
 * @author leonid
 */
class View 
{
    public $path;
    public $route;
    public $layout = 'default';
    
    public function __construct($route) 
    {
        $this->route = $route;
        $this->path = $route['controller'] . '/' . $route['action'];
        //var_dump($this->path);
    }
    
    public function render($title, $vars = []) 
    {
        extract($vars);         
        $file =  'App/View/' . $this->path . '.php';
        if (file_exists($file)) {
            ob_start();
            require $file;
            $content = ob_get_clean();
            require 'App/View/layouts/' . $this->layout . '.php';
        } else {
            echo 'Not Found View: ' . $this->path;
        }               
        
    }
    
    public function redirect($url) 
    {
        header('Location: ' . $url);
        exit();
    }
    
    public static function errorcode($code) 
    {
        http_response_code($code);
         $file = require 'App/View/errors/' . $code . '.php';
         if (file_exists($file)) {
             require $file;
         }
         exit();
    }
}
