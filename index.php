<?php


require __DIR__ . '/vendor/autoload.php';


$highBudgetMachineFactory = new \patterns\Factory\HighBudgetMachineFactory();
$lowMachineFactory = new \patterns\Factory\LowBudgetMachineFactory();

$machineFactory1 = new \patterns\Factory\MachineFactory($highBudgetMachineFactory);
$machineFactory2 = new \patterns\Factory\MachineFactory($lowMachineFactory);

$machine1 = $machineFactory1->createMachine();
$machine2 = $machineFactory2->createMachine();

$shop = [];

$shop [] = $machine1;
$shop [] = $machine2;

foreach ($shop as $machine) {
    $machine->getProcessor()->performOperation();
}





