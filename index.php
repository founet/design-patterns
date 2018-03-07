<?php

require __DIR__ . '/vendor/autoload.php';

$hello = new \patterns\Hello();

$hello = new \patterns\CavaDecorator($hello);
echo $hello->sayHello();
