<?php

namespace Di; 

class Interest{

    public function __construct(protected string $name)
    {
        
    }

    

    /**
     * Get the value of name
     */ 
    public function getName():string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName(string $name):self
    {
        $this->name = $name;

        return $this;
    }
}