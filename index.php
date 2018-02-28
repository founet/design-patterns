<?php


require __DIR__ . '/vendor/autoload.php';

$factory = new \patterns\Factory();


$p1 = $factory->createProduct(1);

$p2 = $factory->createProduct(2);

dump($p1, $p2);


