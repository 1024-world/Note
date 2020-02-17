<?php

namespace DesignPattern\Decorator\DemoDir;

/**
 * Class PanoramicSunroof
 * @package DesignPattern\Decorator\DemoDir
 * @desc 全景天窗类
 */
class PanoramicSunroof extends DecoratorAbstract
{
    private $price = 8000;

    public function price()
    {
        $price = parent::price();

        return $price + $this->price;
    }
}