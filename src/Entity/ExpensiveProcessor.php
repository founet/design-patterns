<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 28/02/2018
 * Time: 17:28
 */

namespace patterns\Entity;


use patterns\Interfaces\ProcessorInterface;

class ExpensiveProcessor implements ProcessorInterface
{

    public function performOperation()
    {
        echo "je suis super rapide";
    }
}