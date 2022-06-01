<?php

namespace Cart;

class StorageArray implements Storable{

    private array $storage = [];

    public function setValue(string $name, float $total):void{

        if(array_key_exists($name, $this->storage)){
            $this->storage[$name] += $total;

            return;
        }

        $this->storage[$name] = $total;

    }
    public function total():float{
        
        return round(  array_sum($this->storage), $_ENV['PRECISION']) ;
    }

}