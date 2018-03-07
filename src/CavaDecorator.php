<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 01/03/2018
 * Time: 16:53
 */

namespace patterns;


class CavaDecorator implements HelloInterface
{

    private $hello;

    public function __construct(HelloInterface $hello)
    {
        $this->hello = $hello;
    }

    public function sayHello()
    {
        return $this->hello->sayHello(). ', Comment ça va ?';
    }
}