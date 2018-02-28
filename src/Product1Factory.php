<?php

namespace patterns;

/**
 * Created by PhpStorm.
 * User: admin
 * Date: 28/02/2018
 * Time: 15:39
 */


class Product1Factory extends BaseFactory
{

    /**
     * @return \patterns\Product
     */
    public function createProduct(): Product
    {
            $product1 = new Product1();
            $product1->addUid();

            return $product1;
    }
}