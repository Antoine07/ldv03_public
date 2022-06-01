<?php

namespace Shipping ;

class ShippingBike extends Shipping{
    
    protected float $cost = 3.5;

    public function getCost(Order $order):float{

        return $this->cost * $order->getWeight();
    }
}