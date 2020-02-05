<?php

namespace DesignPattern\Decorator;

class CollocationB extends DecoratorAbstract
{
    public function productFunction()
    {
        // 叠加产品的效果
        Parent::productFunction();
    }
}