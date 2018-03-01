<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 01/03/2018
 * Time: 11:37
 */

namespace patterns;

use patterns\CacheInterface;


interface HelloInterface
{
    public function sayHello(CacheInterface $cache) : string ;
}