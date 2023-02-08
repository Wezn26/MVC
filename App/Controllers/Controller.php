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
    public $acl;




    public function __construct($route) 
    {
        $this->route = $route;
        //$_SESSION['admin'] = 1;
        //var_dump($this->checkAcl());
        $this->view = new \App\core\View($route);        
        //$this->before();
    }
    
    public function loadModel($name) 
    {
        $path = 'App\Models\\' . ucfirst($name);
        if (class_exists($path)) {
            return new $path;
        }
        //var_dump($path);
    }
    
    public function checkAcl() 
    {
        $this->acl = require 'App/acl/' . $this->route['controller'] . '.php';
        if ($this->isAcl('all')) {
            return true;
        } elseif (isset ($_SESSION['authorize']['id']) and $this->acl['authorize']) {
            return true;
        } elseif (!isset ($_SESSION['authorize']['id']) and $this->acl['guest']) {
            return true;
        } elseif (isset ($_SESSION['admin']) and $this->acl['admin']) {
            return true;
        }
        return false;
        //var_dump($acl);
    }
    
    public function isAcl($key) 
    {
        return in_array($this->route['action'], $this->acl[$key]);
    }
}
