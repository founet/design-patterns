<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 28/02/2018
 * Time: 17:44
 */

namespace patterns\Entity;


use patterns\Interfaces\MonitorInterface;

class LowResolutionMonitor implements MonitorInterface
{

    public function displayPicture()
    {
        echo "Qualité image nulle";
    }
}