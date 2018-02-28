<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 28/02/2018
 * Time: 17:56
 */

namespace patterns\Factory;

use patterns\Entity\Machine;


class MachineFactory
{
    private $factoryCategory;

    public function __construct(MachineFactoryInterface $factoryCategory)
    {
        $this->factoryCategory = $factoryCategory;
    }

    public function createMachine()
    {
        $processor = $this->factoryCategory->getProcessor();
        $hardDisk = $this->factoryCategory->getHardDisk();
        $monitor = $this->factoryCategory->getMonitor();

        $machine = new Machine($processor, $hardDisk, $monitor);

        return $machine;
    }

}