<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 24-Feb-17
 * Time: 19:48
 */

namespace App;


abstract class Model
{
    const TABLE = '';

    public static function findAll(){
        $db = new Db();
        $data=$db->query('SELECT * FROM ' . static::TABLE , [], static::class); //static::class='App\Models\User';
        return $data;
    }

}