<?php

namespace App\Models;


/**
 * Description of Model
 *
 * @author leonid
 */
abstract class Model 
{
   // protected const TABLE = '';
   
    
    public static function getAll() : array
    {
        $db = new \App\lib\Db();
        $sql = 'SELECT * FROM users';
        $data = $db->row($sql);
        return $data;
    }
    
    public static function getColumn(string $column, int $id) : string
    {
        $db = new \App\lib\Db();
        $sql = 'SELECT ' . $column . ' FROM users WHERE id=:id';
        $params = ['id' => $id];
        $data = $db->column($sql, $params);
        return $data;
    }
}
