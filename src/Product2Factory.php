<?php

namespace patterns;

/**
 * Created by PhpStorm.
 * User: admin
 * Date: 28/02/2018
 * Time: 15:39
 */


class Product2Factory extends BaseFactory
{

    /**
     * @return \patterns\Product
     */
    public function createProduct(): Product
    {
        $product2 = new Product2();
        $product2->addUid();

        return $product2;
    }
}