<?php

include __DIR__ . '/autoload.php';

$data=\App\Models\User::findAll();

echo '<pre>';
var_dump($data);
echo '</pre>';

$res=Test\Test::dbTestExecute();
var_dump($res);
$res=Test\Test::dbTestQuery();
var_dump($res);