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
//        echo 'I am router!!!';
    }
    
    public function add($param) 
    {
        
    }
    
    public function match($param) 
    {
        
    }
    
    public function run($param) 
    {
        echo 'start';
    }
}
