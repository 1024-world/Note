<?php

namespace DesignPattern\Decorator;

abstract class DecoratorAbstract implements ProductInterface
{
    protected $product;

    public function __construct(ProductInterface $product)
    {
        $this->product = $product;
    }

    public function productFunction()
    {
        return $this->product->productFunction();
    }
}