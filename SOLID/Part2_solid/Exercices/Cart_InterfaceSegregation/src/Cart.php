<?php

namespace Cart;

class Cart{
    
    public function __construct(
        private Storable $storage,
        private float $tva 
    )
    {
        
    }

    public function buy(Productable $product, int $quantity):void{

        $total = $product->getPrice() * ($this->tva  + 1) * $quantity;

        $this->storage->setValue($product->getName(), $total); 
    }

    public function total():float{

        return $this->storage->total();
    }
}