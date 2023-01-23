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
        $this->view->render('Main Page!!!');
        //echo 'Main Page!!!';
    }   
    
}
