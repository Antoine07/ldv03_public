<?php 

require_once __DIR__ . '/vendor/autoload.php';


use Shipping\{Order, ShippingBike, ShippingFeet};

$orderBike = new Order( new ShippingBike, 100);

echo "cost bike : {$orderBike->showCost()}";
echo PHP_EOL;

$orderFeet = new Order( new ShippingFeet, 100);

echo "cost feet : {$orderFeet->showCost()}";
echo PHP_EOL;