<?php

namespace App\lib;

/**
 * Description of Db
 *
 * @author leonid
 */
class Db 
{
    protected $dbh;
    
    public function __construct() 
    {
        require __DIR__ .'/config.php';
        $this->dbh = new \PDO(DSN, null, null);
    }
}
