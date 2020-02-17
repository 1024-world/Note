<?php

namespace DesignPattern\Decorator\DemoDir;

/**
 * Class LEDHeadlights
 * @package DesignPattern\Decorator\DemoDir
 * @desc LED大灯类
 */
class LEDHeadlights  extends DecoratorAbstract
{
    public $price = 5000;

    public function price()
    {
        $price = parent::price();

        return $price + $this->price;
    }
}