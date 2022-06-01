<?php

namespace Shipping ;

abstract class Shipping {

    protected float $cost;

    abstract function getCost(Order $order ):float;
    
    public function showCost():float{

        return $this->cost;
    }
}