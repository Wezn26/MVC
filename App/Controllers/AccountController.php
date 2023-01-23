<?php

namespace App\Controllers;

/**
 * Description of AccountController
 *
 * @author leonid
 */
class AccountController extends Controller 
{
    
    public function before() 
    {
        $this->view->layout = 'custom';
    }
    
    public function loginAction() 
    {
         $this->view->render('Enter Page!!!');
    }
    
    public function registerAction() 
    {         
         $this->view->render('Registration Page!!!');
    }
}
