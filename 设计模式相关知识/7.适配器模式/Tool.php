<?php

namespace DesignPattern\Adapter;

class Tool implements ToolInterface
{
    public function standardA(ProductAInterface $productA)
    {
        return $productA->productAFunction();
    }
}