<?php

namespace App\Controllers;

/**
 * Description of Controller
 *
 * @author leonid
 */
abstract class Controller 
{
    public $route;
    public $view;
    public $model;
    
    public function __construct($route) 
    {
        $this->route = $route;
        $this->view = new \App\core\View($route);
        $this->model = $this->loadModel($route['controller']); 
        
        //$this->before();
    }
    
    public function loadModel($name) {
        $path = 'App/Models/' . ucfirst($name);
        if (class_exists($path)) {
            return new $path;
        }
        //var_dump($path);
    }
}
