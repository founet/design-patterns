<?php

namespace patterns;


/**
 * Created by PhpStorm.
 * User: admin
 * Date: 28/02/2018
 * Time: 15:01
 */
class Factory
{

    public function createProduct($type)
    {
        switch ($type) {
            case 1 :
                return new ConcreteProduct1();
                break;
            case 2 :
                return new ConcreteProduct2();
                break;
        }
    }
}