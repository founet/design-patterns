<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 28/02/2018
 * Time: 15:06
 */

namespace patterns;


class Product1 implements Product
{

    private $name;

    public function __construct()
    {
        $this->name = "Concrete product 1";
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function addUid()
    {
        return $this->name. " ".uniqid();
    }
}