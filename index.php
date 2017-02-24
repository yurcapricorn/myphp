<?php

include __DIR__ . '/autoload.php';

$db = new Db();
$data=$db->query('SELECT * from foo');
echo '<ret>';
var_dump($data);
echo '</ret>';