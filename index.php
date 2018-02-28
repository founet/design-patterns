<?php


require __DIR__ . '/vendor/autoload.php';

$product1Factory = new \patterns\Product1Factory();

$product1 = $product1Factory->getProduct();


$product2Factory = new \patterns\Product2Factory();

$product2 = $product2Factory->getProduct();


dump($product1, $product2);

dump($product2->addUid());




