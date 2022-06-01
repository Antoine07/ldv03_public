<?php

namespace Cart;

class StorageFile implements Storable
{

    public function __construct(
        private string $fileName
    ) {
        if (file_exists($this->fileName) === false)
            throw new \Exception("ce fichier n'extiste pas {$this->fileName}");

        file_put_contents($this->fileName, '');
    }

    public function setValue(string $name, float $total): void
    {
        file_put_contents($this->fileName, $total . "\n", FILE_APPEND);
    }
    
    public function total(): float
    {

        $handle = fopen($this->fileName, 'r');
        $total = 0;
        if ($handle) {
            while (!feof($handle)) {
                $total += (float) fgets(($handle));
            }

            fclose($handle);
        }

        return  (float) $total;
    }
}
