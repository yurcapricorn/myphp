<?php

namespace App\Models;

use App\Model;

class News extends Model
{
    const TABLE = 'news';
    const INDEX = '\Templates\news_index.php';
    const ONE = '\Templates\article.php';
    const CLAS = 'App\Models\News';
}