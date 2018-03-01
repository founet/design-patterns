<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 28/02/2018
 * Time: 17:35
 */

namespace patterns\Entity;


use patterns\Interfaces\HardDiskInterface;

class CheapHardDisk implements HardDiskInterface
{
    public function storeData()
    {
       echo "J'enregistre lentement";
    }
}