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
    public function __construct($route) 
    {
        $this->route = $route;
    }
}
