<?php

use patterns\Singleton;

require __DIR__ . '/vendor/autoload.php';

$hello1 = Singleton::getInstance();
$hello2 = Singleton::getInstance();

var_dump($hello1, $hello2);

