<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 01/03/2018
 * Time: 11:39
 */

namespace patterns;


class Cache implements CacheInterface
{

    public function get(string $key)
    {
       return false;
    }

    public function has(string $key)
    {
       return false;
    }

    public function set(string $key, string $value, int $expiration = 3600)
    {
       return false;
    }
}