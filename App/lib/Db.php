<?php

namespace App\lib;

/**
 * Description of Db
 *
 * @author leonid
 */
class Db 
{
    private $dbh;
    
    public function __construct() 
    {
        $path = require __DIR__ . '/config.php';        
        $db = $this->dbh = new \PDO(DSN);       
    }
}
