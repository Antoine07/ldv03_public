<?php

require_once __DIR__ . '/vendor/autoload.php';

use Di\{Container, User, Interest};

$container = new Container( new SplObjectStorage );

$sql = new Interest('SQL');
$container->setStorage($sql, 'SQL');

$storage = new SplObjectStorage;
$alan = new User( $storage );

$alan->setInterest($container->getStorage('SQL'));

$bigdata = new Interest('DATA');
$container->setStorage($bigdata, 'DATA');

$alan->setInterest($container->getStorage('DATA'));

echo PHP_EOL;
echo $alan ;
echo PHP_EOL;