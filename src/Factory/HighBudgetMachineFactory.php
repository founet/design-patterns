<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 28/02/2018
 * Time: 17:48
 */

namespace patterns\Factory;


use patterns\Entity\ExpensiveHardDisk;
use patterns\Entity\ExpensiveProcessor;
use patterns\Entity\HighResolutionMonitor;
use patterns\Interfaces\HardDiskInterface;
use patterns\Interfaces\MonitorInterface;
use patterns\Interfaces\ProcessorInterface;

class HighBudgetMachineFactory implements MachineFactoryInterface
{

    public function getProcessor(): ProcessorInterface
    {
       return new ExpensiveProcessor();
    }

    public function getHardDisk(): HardDiskInterface
    {
        return new ExpensiveHardDisk();
    }

    public function getMonitor(): MonitorInterface
    {
        return new HighResolutionMonitor();
    }
}