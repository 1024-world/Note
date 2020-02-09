<?php

namespace DesignPattern\Factory\SimpleFactory;

class Factory
{
    public function create($productName)
    {
        if ($productName == 'ProductA') {
            return new ProductA();
        } elseif ($productName == 'ProductB') {
            return new ProductB();
        }

        return NULL;
    }
}