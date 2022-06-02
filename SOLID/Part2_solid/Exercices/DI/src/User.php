<?php

namespace Di;

use SplObjectStorage;

class User{

    protected $strInterestsName = '';

    public function __construct(protected SplObjectStorage $storage){

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

    public function __toString():string{
        foreach($this->storage as $storage) {
            $this->strInterestsName .= "Interest :{$storage->getName()}" . PHP_EOL;
        }

        return $this->strInterestsName;
    }

    public function setInterest( Interest $interest):self{

        $this->storage->attach($interest);

        return $this;
    }
}