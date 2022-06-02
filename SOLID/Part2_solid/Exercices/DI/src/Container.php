<?php

namespace Di;

use SplObjectStorage;

class Container
{

    public function __construct(protected SplObjectStorage $storage)
    {
    }

    /**
     *  return current storage
     * 
     * @param string name
     * @return service 
     */
    public function getStorage(string $name): ?Interest
    {
        // remet l'itérateur 
        $this->storage->rewind();
        while ($this->storage->valid()) {
            if ($name === $this->storage->getInfo()) {

                return $this->storage->current();
            }

            $this->storage->next();
        }
    }

    public function setStorage(Interest $interest, string $name): self
    {
        if ($this->storage->contains($interest))
            throw new \Exception("Cet  intérêt existe déjà");

        $this->storage->attach($interest, $name);

        return $this;
    }
}
