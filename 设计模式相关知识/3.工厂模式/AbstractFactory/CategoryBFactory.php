<?php

namespace DesignPattern\AbstractFactory;

class CategoryBFactory implements FactoryInterface
{
    public function createCategoryA($productName) {}

    public function createCategoryB($productName)
    {
        if ($productName == 'ProductC') {
            return new ProductC();
        } elseif ($productName == 'ProductD') {
            return new ProductD();
        }

        return NULL;
    }
}