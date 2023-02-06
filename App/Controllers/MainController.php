<?php

namespace App\Controllers;

use App\Models\Main;

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
        
        
        //$data = Main::getColumn('name', 1);
        //$data2 = Main::getAll();
        //var_dump($data);
        //var_dump($data2);
        $main = new Main();
        $news = $main->getNews();
        $vars = [
            'news' => $news
        ];
       
        $this->view->render('Main Page!!!', $vars);
        //echo 'Main Page!!!';
    }   
    
}
