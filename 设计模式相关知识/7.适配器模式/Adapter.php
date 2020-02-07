<?php

namespace DesignPattern\Adapter;

class Adapter implements ProductAInterface
{
    private $productB;

    public function __construct(ProductBInterface $productB)
    {
        $this->productB = $productB;
    }
    public function productAFunction()
    {
        return $this->productB->productBFunction();
    }
}