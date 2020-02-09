<?php

namespace DesignPattern\Proxy;

class ProxyProduct implements ProductInterface
{
    private $product = NULL;
    public function productFunctionA()
    {
        if ($this->product == NULL) {
            $this->product = new Product();
        }

        $this->product->productFunctionA();
    }
} 