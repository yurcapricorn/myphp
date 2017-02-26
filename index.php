<?php

include __DIR__ . '/autoload.php';

\App\Models\News::displayAll();

//echo '<pre>';
//var_dump($data);
//echo '</pre>';

Test\Test::dbTest();
