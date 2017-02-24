<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 24-Feb-17
 * Time: 20:50
 */

namespace Test;

class Test
{
    static public function dbTestExecute(){
        $db = new \App\Db();
        $sql='SELECT * FROM user WHERE id>:id';
        $args=[':id'=>0];
        $res=$db->execute($sql,$args);
        return $res;
    }

    static public function dbTestQuery(){
        $db = new \App\Db();
        $sql="SELECT * FROM user WHERE id>:id";
        $args=[':id'=>0];
        $res=$db->query($sql,$args);
        return $res;
    }


}