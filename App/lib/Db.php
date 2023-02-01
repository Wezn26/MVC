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
    
    public function query($sql, $params = []) 
    {
        $stmt = $this->dbh->prepare($sql);
        if (!empty($params)) {
            foreach ($params as $key => $value) {
                $stmt->bindValue(':' . $key, $value);
                //echo '<p>'. $key . ' => ' . $value . '</p>';
            }
        }
        $stmt->execute();
        return $stmt;
    }
    
    public function row($sql, $params = []) 
    {
        $result = $this->query($sql, $params);
        return $result->fetchAll(\PDO::FETCH_ASSOC);
    }
    
    public function column($sql, $params = []) 
    {
        $result = $this->query($sql, $params);
        return $result->fetchColumn();
    }
}
