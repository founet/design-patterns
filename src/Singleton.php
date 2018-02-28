<?php

namespace patterns;

/**
 * Created by PhpStorm.
 * User: admin
 * Date: 17/01/2018
 * Time: 11:27
 */
class Singleton
{

    private static $instance;

    private $uid;

    private function __construct()
    {
        $this->uid = uniqid();
    }

    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new Singleton();
        }

        return self::$instance;
    }
}