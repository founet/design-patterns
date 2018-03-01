<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 01/03/2018
 * Time: 11:45
 */

namespace patterns;


use Doctrine\Common\Cache\Cache;

class DoctrineCacheAdapter implements CacheInterface
{
    private $cache;

    public function __construct(Cache $cache)
    {
        $this->cache = $cache;
    }

    public function get(string $key)
    {
        return $this->cache->fetch($key);
    }

    public function has(string $key)
    {
       return $this->cache->contains($key);
    }

    public function set(string $key, string $value, int $expiration = 3600)
    {
        $this->cache->save($key, $value, $expiration);
    }
}