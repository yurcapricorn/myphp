<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 26-Feb-17
 * Time: 12:32
 */

namespace App\Models;

use App\Db;
use App\Model;

class News extends Model
{
    const TABLE = 'news';
    const INDEX = '\App\Templates\news_index.php';
    const ONE = '\App\Templates\article.php';
    public $author;
    public $header;
    public $body;
    public $date;
}