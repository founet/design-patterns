<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 28/02/2018
 * Time: 18:01
 */

namespace patterns\Entity;


use patterns\Interfaces\HardDiskInterface;
use patterns\Interfaces\MonitorInterface;
use patterns\Interfaces\ProcessorInterface;

class Machine
{
    private $processor;
    private $hardDisk;
    private $monitor;

    public function __construct(ProcessorInterface $processor, HardDiskInterface $hardDisk, MonitorInterface $monitor)
    {
        $this->processor = $processor;
        $this->hardDisk = $hardDisk;
        $this->monitor = $monitor;
    }

    /**
     * @return ProcessorInterface
     */
    public function getProcessor(): ProcessorInterface
    {
        return $this->processor;
    }

    /**
     * @param ProcessorInterface $processor
     */
    public function setProcessor(ProcessorInterface $processor)
    {
        $this->processor = $processor;
    }

    /**
     * @return HardDiskInterface
     */
    public function getHardDisk(): HardDiskInterface
    {
        return $this->hardDisk;
    }

    /**
     * @param HardDiskInterface $hardDisk
     */
    public function setHardDisk(HardDiskInterface $hardDisk)
    {
        $this->hardDisk = $hardDisk;
    }

    /**
     * @return MonitorInterface
     */
    public function getMonitor(): MonitorInterface
    {
        return $this->monitor;
    }

    /**
     * @param MonitorInterface $monitor
     */
    public function setMonitor(MonitorInterface $monitor)
    {
        $this->monitor = $monitor;
    }


}