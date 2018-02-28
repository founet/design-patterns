<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 28/02/2018
 * Time: 17:46
 */

namespace patterns\Factory;


use patterns\Interfaces\HardDiskInterface;
use patterns\Interfaces\MonitorInterface;
use patterns\Interfaces\ProcessorInterface;

interface MachineFactoryInterface
{
    public function getProcessor() : ProcessorInterface;

    public function getHardDisk() : HardDiskInterface;

    public function getMonitor() : MonitorInterface;
}