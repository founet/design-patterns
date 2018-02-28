<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 28/02/2018
 * Time: 17:48
 */

namespace patterns\Factory;


use patterns\Entity\CheapHardDisk;
use patterns\Entity\CheapProcessor;
use patterns\Entity\LowResolutionMonitor;
use patterns\HardDiskInterface;
use patterns\MonitorInterface;
use patterns\ProcessorInterface;

class LowBudgetMachineFactory implements MachineFactoryInterface
{

    public function getProcessor(): ProcessorInterface
    {
        return new CheapProcessor();
    }

    public function getHardDisk(): HardDiskInterface
    {
        return new CheapHardDisk();
    }

    public function getMonitor(): MonitorInterface
    {
        return new LowResolutionMonitor();
    }
}