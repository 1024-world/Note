<?php

namespace DesignPattern\Factory;

class ProductAFactory implements FactoryInterface
{
    public function create()
    {
        return new ProductA();
    }
}