<?php

use patterns\Hello;

require __DIR__ . '/vendor/autoload.php';

$hello1 = Hello::getInstance();
$hello2 = Hello::getInstance();

var_dump($hello1, $hello2);

