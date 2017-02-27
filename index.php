<?php

include __DIR__ . '/autoload.php';

//\App\Models\News::displayAll();



$article = new \App\Models\Article(1);


echo '<pre>';
var_dump($article);
echo '</pre>';

Test\Test::dbTest();
