<?php

namespace App\Models;

use App\Model;

class Article extends Model
{
    const TABLE = 'news';
    const INDEX = '\App\Templates\news_index.php';
    const ONE = '\App\Templates\article.php';
    public $id;
    public $author;
    public $header;
    public $body;
    public $date;

    public function __construct($id)
    {
        $article=static::findById($id);
        $article = $article[0];
        var_dump($article);
        foreach($article as $key=>$value) {
            if ($key==$this->id){$this->id = $value;}
            if ($key==$this->author){$this->author = $value;}
            if ($key==$this->header){$this->header = $value;}
            if ($key==$this->body){$this->body = $value;}
            if ($key==$this->date){$this->date = $value;}
            //public $author;
            //public $header;
            //public $body;
            //public $date;
            //echo 'this->id = ' . $this->id;
        }





    }
}