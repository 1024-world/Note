<?php

namespace DesignPattern\Decorator\DemoDir;

/**
 * Class Car
 * @package DesignPattern\Decorator\DemoDir
 * @desc 汽车类
 */
class Car implements CarInterface
{
    // 裸车价格
    public $price = 100000;

    public function price()
    {
        return $this->price;
    }
}