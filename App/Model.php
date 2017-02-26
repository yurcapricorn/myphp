<?php

namespace App;

abstract class Model
{
    const TABLE = '';
    const INDEX = '';
    const ONE = '';

    public static function findAll(){
        $db = new Db();
        $data=$db->query('SELECT * FROM ' . static::TABLE , [], static::class); //static::class='App\Models\User';
        return $data;
    }

    public static function findById($id){
        if (!$id){return [];}
        $db = new Db();
        $args=[':id'=>$id];
        $data=$db->query('SELECT * FROM ' . static::TABLE . ' WHERE id=:id', $args, static::class); //static::class='App\Models\User';
        if ($data){return $data;}
        else {return false;}
    }

    public static function displayAll(){
        $data=static::findAll();
        include static::INDEX;
    }

    public static function displayOne($id){
        $data=static::findById($id);
        include static::ONE;
    }
}