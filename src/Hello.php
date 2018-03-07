<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 01/03/2018
 * Time: 16:52
 */

namespace patterns;


class Hello implements HelloInterface
{

    public function sayHello()
    {
       return "Bonjour";
    }
}