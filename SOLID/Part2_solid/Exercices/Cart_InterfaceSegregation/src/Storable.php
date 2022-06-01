<?php

namespace Cart;

interface Storable{
    public function setValue(string $name, float $total):void;
    public function total():float;

}