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
    
    public function __construct($route) 
    {
        $this->route = $route;
        $this->view = new \App\core\View($route);
        //$this->before();
    }
}
