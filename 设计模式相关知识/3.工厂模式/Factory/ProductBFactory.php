<?php

namespace DesignPattern\Factory;

class ProductBFactory implements FactoryInterface
{
    public function create()
    {
        return new ProductB();
    }
}