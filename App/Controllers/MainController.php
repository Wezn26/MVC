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
        $this->view->render('Main Page!!!', $vars);
        //echo 'Main Page!!!';
    }   
    
}
