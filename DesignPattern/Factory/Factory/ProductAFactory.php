<?php

namespace DesignPattern\Factory\Factory;

class ProductAFactory implements FactoryInterface
{
    public function create()
    {
        return new ProductA();
    }
}