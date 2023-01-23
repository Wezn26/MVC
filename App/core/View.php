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
        ob_start(); 
        $file =  'App/View/' . $this->path . '.php';
        if (file_exists($file)) {
            require $file;
            $content = ob_get_clean();
            require 'App/View/layouts/' . $this->layout . '.php';
        } else {
            echo 'Not Found View: ' . $this->path;
        }
               
        
    }
}
