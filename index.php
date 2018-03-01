<?php

require __DIR__ . '/vendor/autoload.php';

$doctrineCache = new Doctrine\Common\Cache\FilesystemCache(__DIR__.'/cache');
$cacheAdapter = new \patterns\DoctrineCacheAdapter($doctrineCache);

$hello = new \patterns\Hello();
echo $hello->sayHello($cacheAdapter);