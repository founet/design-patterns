<?php


require __DIR__ . '/vendor/autoload.php';


$highBudgetMachineFactory = new \patterns\Factory\HighBudgetMachineFactory();

$machineFactory = new \patterns\Factory\MachineFactory($highBudgetMachineFactory);

$machine = $machineFactory->createMachine();

dump($machine->getMonitor()->displayPicture());





