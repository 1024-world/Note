<?php

namespace DesignPattern\Factory\Factory;

class ProductBFactory implements FactoryInterface
{
    public function create()
    {
        return new ProductB();
    }
}