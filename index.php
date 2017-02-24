<?php

include __DIR__ . 'Db.php';

include __DIR__ . '/autoload.php';

$db = new Db();
$db->execute('SELECT * from test');
echo '<ret>';
var_dump($db);
echo '</ret>';