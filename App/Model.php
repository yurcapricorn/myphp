<?php

namespace App;

abstract class Model
{
    const TABLE = '';
    const INDEX = '';
    const ONE = '';
    const CLAS = '';

    public static function findAll(){
        $db = new Db();
        $data=$db->query('SELECT * FROM ' . static::TABLE , [], static::CLAS); //static::class='App\Models\User';
        return $data;
    }

    public static function findById($id){
        if (!$id){return [];}
        $db = new Db();
        $args=[':id'=>$id];
        $data=$db->query('SELECT * FROM ' . static::TABLE . ' WHERE id=:id', $args, static::CLAS); //static::class='App\Models\User';
        if ($data){return $data;}
        else {return false;}
    }

    public static function displayAll(){
        $data=static::findAll();
        include __DIR__ . static::INDEX;
    }

    public static function displayOne($id){
        $data=static::findById($id);
        include __DIR__ . static::ONE;
    }
}