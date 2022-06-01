<?php

namespace Shipping ;

class Order {
    
    public function __construct(
        private Shipping $shipping,
        protected float $weight
    )
    {
        
    }

    public function cost():float{

        return $this->shipping->getCost($this);
    }

    public function getWeight():float{

        return $this->weight;
    }

    public function showCost():float{

        return $this->shipping->showCost();
    }

}