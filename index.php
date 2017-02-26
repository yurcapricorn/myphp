<?php

include __DIR__ . '/autoload.php';

\App\Models\News::displayOne(1);

//echo '<pre>';
//var_dump($data);
//echo '</pre>';

Test\Test::dbTest();
