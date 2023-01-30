<?php

namespace App\Controllers;

/**
 * Description of MainController
 *
 * @author leonid
 */
class MainController extends Controller
{
    public function indexAction() 
    {
//        $vars = [
//            'name' => 'Vasya',
//            'age'  => '18'
//        ];
        $db = new \App\lib\Db();
        $this->view->render('Main Page!!!');
        //echo 'Main Page!!!';
    }   
    
}
