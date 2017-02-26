<?php

namespace App\Models;

use App\Model;

class News extends Model
{
    const TABLE = 'news';
    const INDEX = '\App\Templates\news_index.php';
    const ONE = '\App\Templates\article.php';
}