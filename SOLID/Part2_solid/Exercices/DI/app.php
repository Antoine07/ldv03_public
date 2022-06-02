<?php

require_once __DIR__ . '/vendor/autoload.php';

use Di\{Container, User, Interest};

// DI container de service 
// SplObjectStorage stocke des objets donc c'est plus efficace qu'un array php
$container = new Container( new SplObjectStorage );

$sql = new Interest('SQL');
$container->setStorage($sql, 'SQL');

// Mon user 
$storage = new SplObjectStorage;
$alan = new User( $storage );

// On fait une injection d'un service péparé dans le conteneur de service
$alan->setInterest($container->getStorage('SQL'));

$bigdata = new Interest('DATA');
$container->setStorage($bigdata, 'DATA');

$alan->setInterest($container->getStorage('DATA'));

echo PHP_EOL;
echo $alan ;
echo PHP_EOL;