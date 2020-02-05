<?php

namespace DesignPattern\AbstractFactory;

class CategoryAFactory implements FactoryInterface
{
    public function createCategoryA($productName)
    {
        if ($productName == 'ProductA') {
            return new ProductA();
        } elseif ($productName == 'ProductB') {
            return new ProductB();
        }

        return NULL;
    }

    public function createCategoryB($productName) {}
}