<?php

use patterns\Singleton;

require __DIR__ . '/vendor/autoload.php';

$hello1 = Singleton::getInstance();
$hello2 = Singleton::getInstance();

dump($hello1, $hello2);

