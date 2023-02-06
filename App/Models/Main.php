<?php

namespace App\Models;


/**
 * Description of Main
 *
 * @author leonid
 */
class Main extends Model
{    
 
    protected const TABLE = 'news';
    public function getNews() 
    {
        $db = new \App\lib\Db();
        $sql = 'SELECT * FROM ' . static::TABLE;
        return $db->row($sql);
    }
}
