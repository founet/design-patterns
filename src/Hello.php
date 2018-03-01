<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 01/03/2018
 * Time: 11:37
 */

namespace patterns;

use patterns\CacheInterface;

class Hello implements HelloInterface
{

    public function sayHello(CacheInterface $cache): string
    {
        if ($cache->has('hello')) {
            return $cache->get('hello');
        }

        sleep(4);

        $content = "Bonjour";
        $cache->set('hello', $content);

        return $content;
    }
}