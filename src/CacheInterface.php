<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 01/03/2018
 * Time: 11:39
 */

namespace patterns;


interface CacheInterface
{
    public function get(string $key);
    public function has(string $key);
    public function set(string $key, string $value, int $expiration);


}