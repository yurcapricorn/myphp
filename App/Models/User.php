<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 24-Feb-17
 * Time: 16:56
 */

namespace App\Models;

use App\Db;

class User
{
    private static $table = 'user';
    public $email;
    public $name;
    public static function findAll(){
        $db = new Db();
        $class='App\Models\User';
        $data=$db->query('SELECT * FROM ' . static::$table , $class);
        return $data;
    }

}