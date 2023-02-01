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
        $this->dbh = new \PDO(DSN);       
    }
    
    public function query($sql) 
    {
        $query = $this->dbh->query($sql);
        return $query;
    }
    
    public function row($sql) 
    {
        $result = $this->query($sql);
        return $result->fetchAll(\PDO::FETCH_ASSOC);
    }
    
    public function column($sql) 
    {
        $result = $this->query($sql);
        return $result->fetchColumn();
    }
}
