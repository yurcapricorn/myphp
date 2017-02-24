<?php

include __DIR__ . '/autoload.php';

//$user = new \App\Models\User();
$data=\App\Models\User::findAll();

echo '<pre>';
var_dump($data);
echo '</pre>';