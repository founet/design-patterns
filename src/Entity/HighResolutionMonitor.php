<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 28/02/2018
 * Time: 17:41
 */

namespace patterns\Entity;


use patterns\Interfaces\MonitorInterface;

class HighResolutionMonitor implements MonitorInterface
{

    public function displayPicture()
    {
       echo "Qualité image superbe";
    }
}