<?php

namespace patterns;


/**
 * Created by PhpStorm.
 * User: admin
 * Date: 28/02/2018
 * Time: 15:01
 */
abstract class BaseFactory
{
    public function getProduct(): Product
    {
        $product = $this->createProduct();
        $product->addUid();

        return $product;
    }

    /**
     * @return Product
     */
    public abstract function createProduct(): Product;

}