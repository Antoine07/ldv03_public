<?php

namespace Shipping ;

class ShippingFeet extends Shipping{

    protected float $cost = 1.5;

    public function getCost(Order $order):float{

        return $this->cost * $order->getWeight();
    }
}