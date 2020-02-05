<?php

namespace DesignPattern\Decorator;

class CollocationA extends DecoratorAbstract
{
    public function productFunction()
    {
        // 叠加产品的效果
        Parent::productFunction();
    }
}