<?php

namespace Cart;

interface Productable{

    public function getName():string;
    public function setName(string $name):self;
    public function getPrice():float;
    public function setPrice(float $price):self;
}